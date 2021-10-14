<template>
	<div class="section">
		<h2>{{ $t('dav', 'Availability') }}</h2>
		<p>
			{{ $t('dav', 'If you configure your working hours, other users will see when you are out of office when they book a meeting.') }}
		</p>
		<table>
			<tr v-for="day in daysOfTheWeek" :key="day.id">
				<td class="availability-day">
					<input :id="`toggle-day-${day.id}`"
						type="checkbox"
						class="checkbox">
					<label :for="`toggle-day-${day.id}`">
						{{ day.displayName }}
					</label>
				</td>
				<td class="availability-slots">
					<DatetimePicker type="time" class="start-date" format="H:mm" />
					{{ $t('dav', 'to') }}
					<DatetimePicker type="time" class="end-date" format="H:mm" />
					<button class="add-another button">
						{{ $t('dav', 'Add slot') }}
					</button>
				</td>
			</tr>
		</table>
	</div>
</template>

<script>
import DatetimePicker from '@nextcloud/vue/dist/Components/DatetimePicker'

export default {
	name: 'Availability',
	components: {
		DatetimePicker,
	},
	data() {
		// TODO: reorder if Sunday is the first day of the week
		return {
			daysOfTheWeek: [
				{
					id: 'mo',
					displayName: this.$t('dav', 'Monday'),
				},
				{
					id: 'tu',
					displayName: this.$t('dav', 'Tuesday'),
				},
				{
					id: 'we',
					displayName: this.$t('dav', 'Wednesday'),
				},
				{
					id: 'th',
					displayName: this.$t('dav', 'Thursday'),
				},
				{
					id: 'fr',
					displayName: this.$t('dav', 'Friday'),
				},
				{
					id: 'sa',
					displayName: this.$t('dav', 'Saturday'),
				},
				{
					id: 'su',
					displayName: this.$t('dav', 'Sunday'),
				},
			],
		}
	},
}
</script>

<style lang="scss" scoped>
.availability-day {
	padding: 10px;
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

</style>
