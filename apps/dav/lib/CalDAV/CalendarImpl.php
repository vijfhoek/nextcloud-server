<?php

declare(strict_types=1);

/**
 * @copyright 2017, Georg Ehrke <oc.list@georgehrke.com>
 *
 * @author Anna Larch <anna@nextcloud.com>
 * @author Christoph Wurst <christoph@winzerhof-wurst.at>
 * @author Georg Ehrke <oc.list@georgehrke.com>
 * @author Roeland Jago Douma <roeland@famdouma.nl>
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\DAV\CalDAV;

use OCP\Calendar\ICalendar;
use OCP\Constants;

class CalendarImpl implements ICalendar {

	/** @var CalDavBackend */
	private $backend;

	/** @var Calendar */
	private $calendar;

	/** @var array */
	private $calendarInfo;

	/**
	 * CalendarImpl constructor.
	 *
	 * @param Calendar $calendar
	 * @param array $calendarInfo
	 * @param CalDavBackend $backend
	 */
	public function __construct(Calendar $calendar, array $calendarInfo,
								CalDavBackend $backend) {
		$this->calendar = $calendar;
		$this->calendarInfo = $calendarInfo;
		$this->backend = $backend;
	}

	/**
	 * @return string defining the technical unique key
	 * @since 13.0.0
	 */
	public function getKey() {
		return $this->calendarInfo['id'];
	}

	/**
	 * In comparison to getKey() this function returns a human readable (maybe translated) name
	 * @return null|string
	 * @since 13.0.0
	 */
	public function getDisplayName() {
		return $this->calendarInfo['{DAV:}displayname'];
	}

	/**
	 * Calendar color
	 * @return null|string
	 * @since 13.0.0
	 */
	public function getDisplayColor() {
		return $this->calendarInfo['{http://apple.com/ns/ical/}calendar-color'];
	}

	/**
	 * @param string $pattern which should match within the $searchProperties
	 * @param array $searchProperties defines the properties within the query pattern should match
	 * @param array $options - optional parameters:
	 * 	['timerange' => ['start' => new DateTime(...), 'end' => new DateTime(...)]]
	 * @param integer|null $limit - limit number of search results
	 * @param integer|null $offset - offset for paging of search results
	 * @return array an array of events/journals/todos which are arrays of key-value-pairs
	 * @since 13.0.0
	 */
	public function search($pattern, array $searchProperties = [], array $options = [], $limit = null, $offset = null) {
		return $this->backend->search($this->calendarInfo, $pattern,
			$searchProperties, $options, $limit, $offset);
	}

	/**
	 * @return integer build up using \OCP\Constants
	 * @since 13.0.0
	 */
	public function getPermissions() {
		$permissions = $this->calendar->getACL();
		$result = 0;
		foreach ($permissions as $permission) {
			switch ($permission['privilege']) {
				case '{DAV:}read':
					$result |= Constants::PERMISSION_READ;
					break;
				case '{DAV:}write':
					$result |= Constants::PERMISSION_CREATE;
					$result |= Constants::PERMISSION_UPDATE;
					break;
				case '{DAV:}all':
					$result |= Constants::PERMISSION_ALL;
					break;
			}
		}

		return $result;
	}
}
