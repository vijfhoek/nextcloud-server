/**
 * @copyright 2021 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author 2021 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
import { getClient } from '../dav/client'
import ICAL from 'ical.js'
import { parseXML } from 'webdav/dist/node/tools/dav'

export async function findScheduleInboxAvailability() {
	const client = getClient('calendars')

	const response = await client.customRequest('inbox', {
		method: 'PROPFIND',
		data: `<?xml version="1.0"?>
			<x0:propfind xmlns:x0="DAV:">
			  <x0:prop>
				<x1:calendar-availability xmlns:x1="urn:ietf:params:xml:ns:caldav"/>
			  </x0:prop>
			</x0:propfind>`
	})

	const xml = await parseXML(response.data)

	if (!xml) {
		return undefined
	}

	const availability = xml?.multistatus?.response[0]?.propstat?.prop['calendar-availability']
	if (!availability) {
		return undefined
	}

	const parsedIcal = ICAL.parse(availability)

	const vcalendarComp = new ICAL.Component(parsedIcal)
	const vavailabilityComp = vcalendarComp.getFirstSubcomponent('vavailability')
	const availableComps = vavailabilityComp.getAllSubcomponents('available')

	// Combine all AVAILABLE blocks into a week of slots
	const slots = {
		MO: [],
		TU: [],
		WE: [],
		TH: [],
		FR: [],
		SA: [],
		SU: [],
	}
	availableComps.forEach((availableComp) => {
		const start = availableComp.getFirstProperty('dtstart').getFirstValue().toJSDate()
		const end = availableComp.getFirstProperty('dtend').getFirstValue().toJSDate()
		const rrule = availableComp.getFirstProperty('rrule')

		if (rrule.getFirstValue().freq !== 'WEEKLY') {
			console.warn('rrule not supported', {
				rrule: rrule.toICALString(),
			})
			return
		}

		rrule.getFirstValue().getComponent('BYDAY').forEach(day => {
			slots[day].push({
				start,
				end,
			})
		})
	})

	return {
		slots,
	}
}
