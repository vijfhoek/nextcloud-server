<template>
	<div class="section">
		<h2>{{ $t('dav', 'Availability') }}</h2>
		<p>
			{{ $t('dav', 'If you configure your working hours, other users will see when you are out of office when they book a meeting.') }}
		</p>
		<div class="time-zone">
			<strong>
				{{ $t('calendar', 'Please select a time zone:') }}
			</strong>
			<TimezonePicker
				class="timezone-popover-wrapper__timezone-select" />
		</div>
		<table>
			<tr v-for="day in daysOfTheWeek" :key="day.id">
				<td class="availability-day">
					<input :id="`toggle-day-${day.id}`"
						type="checkbox"
					    v-model="day.active"
						class="checkbox">
					<label :for="`toggle-day-${day.id}`">
						{{ day.displayName }}
					</label>
				</td>
				<td class="availability-slots">
					<template v-for="slot in day.slots">
						<DatetimePicker type="time" class="start-date" format="H:mm" v-model="slot.start"/>
						{{ $t('dav', 'to') }}
						<DatetimePicker type="time" class="end-date" format="H:mm" v-model="slot.end"/>
					</template>
					<button @click="addSlot(day)" class="add-another button">
						{{ $t('dav', 'Add slot') }}
					</button>
				</td>
			</tr>
		</table>
	</div>
</template>

<script>
import DatetimePicker from '@nextcloud/vue/dist/Components/DatetimePicker'
import { findScheduleInboxAvailability } from '../service/CalendarService'
import TimezonePicker from '@nextcloud/vue/dist/Components/TimezonePicker'
export default {
	name: 'Availability',
	components: {
		DatetimePicker,
		TimezonePicker,
	},
	data() {
		// TODO: reorder if Sunday is the first day of the week
		return {
			daysOfTheWeek: [
				{
					id: 'MO',
					active: false,
					displayName: this.$t('dav', 'Monday'),
					slots: [],
				},
				{
					id: 'TU',
					active: false,
					displayName: this.$t('dav', 'Tuesday'),
					slots: [],
				},
				{
					id: 'WE',
					active: false,
					displayName: this.$t('dav', 'Wednesday'),
					slots: [],
				},
				{
					id: 'TH',
					active: false,
					displayName: this.$t('dav', 'Thursday'),
					slots: [],
				},
				{
					id: 'FR',
					active: false,
					displayName: this.$t('dav', 'Friday'),
					slots: [],
				},
				{
					id: 'SA',
					active: false,
					displayName: this.$t('dav', 'Saturday'),
					slots: [],
				},
				{
					id: 'SU',
					active: false,
					displayName: this.$t('dav', 'Sunday'),
					slots: [],
				},
			],
		}
	},
	async mounted() {
		const { slots } = await findScheduleInboxAvailability()

		if (slots) {
			this.daysOfTheWeek.forEach(day => {
				day.slots.push(...slots[day.id])
				day.active = slots[day.id].length > 0
			})
		}

		console.info('availability loaded', this.daysOfTheWeek)
	},
	methods: {
		addSlot(day) {
			const start = new Date()
			start.setHours(9)
			start.setMinutes(0)
			start.setSeconds(0)
			const end = new Date()
			end.setHours(17)
			end.setMinutes(0)
			end.setSeconds(0)

			day.slots.push({
				start,
				end,
			})
		}
	}
}
</script>

<style lang="scss" scoped>
.availability-day {
	padding: 0 10px 10px 10px;
}
.availability-slots {
	padding: 10px 10px 20px 10px;
}
::v-deep .mx-input-wrapper {
	width: 85px;
}
::v-deep .mx-datepicker {
	width: 110px;
}
::v-deep .multiselect {
	border: 1px solid var(--color-border-dark);
	width: 120px;
}
.time-zone {
	padding: 12px 12px 12px 0px;
}
</style>
