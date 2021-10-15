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
		<div class="grid-table">
			<template v-for="day in daysOfTheWeek">
				<div :key="day.id + 1">
					<input
						:id="`toggle-day-${day.id}`"
						v-model="day.active"
						class="availability-day"
						type="checkbox">
					<label :for="`toggle-day-${day.id}`" class="label-weekday">
						{{ day.displayName }}
					</label>
				</div>
				<div :key="day.id + 1" class="availability-slots">
					<div class="availability-slot">
						<template v-for="slot in day.slots">
							<div :key="slot">
								<DatetimePicker
									v-model="slot.start"
									type="time"
									class="start-date"
									format="H:mm" />
								{{ $t('dav', 'to') }}
								<DatetimePicker
									v-model="slot.end"
									type="time"
									class="end-date"
									format="H:mm" />
							</div>
						</template>
					</div>
					<button :key="day.id + 6" class="add-another button" @click="addSlot(day)">
						{{ $t('dav', 'Add slot') }}
					</button>
				</div>
			</template>
		</div>
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
		},
	},
}
</script>

<style lang="scss" scoped>
.availability-day {
	padding: 0 10px 10px 10px;
	margin-top: 20px;
}
.availability-slots {
	display: flex;
}
.availability-slot {
	display: flex;
	flex-direction: column;
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
.grid-table {
	display: grid;
	grid-template-columns: min-content auto;
}
.button {
	height: 44px;
	align-self: flex-end;
}

</style>
