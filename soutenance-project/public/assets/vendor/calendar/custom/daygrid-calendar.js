document.addEventListener("DOMContentLoaded", function () {
	var calendarEl = document.getElementById("dayGrid");
	var calendar = new FullCalendar.Calendar(calendarEl, {
		headerToolbar: {
			left: "prevYear,prev,next,nextYear today",
			center: "title",
			right: "dayGridMonth,dayGridWeek,dayGridDay",
		},
		initialDate: "2022-10-12",
		navLinks: true, // can click day/week names to navigate views
		editable: true,
		dayMaxEvents: true, // allow "more" link when too many events
		events: [
			{
				title: "All Day Event",
				start: "2022-10-01",
				color: "#294137",
			},
			{
				title: "Long Event",
				start: "2022-10-07",
				end: "2022-10-10",
				color: "#3b5d4f",
			},
			{
				groupId: 999,
				title: "Birthday",
				start: "2022-10-09T16:00:00",
				color: "#c4ceca",
			},
			{
				groupId: 999,
				title: "Birthday",
				start: "2022-10-16T16:00:00",
				color: "#294137",
			},
			{
				title: "Conference",
				start: "2022-10-11",
				end: "2022-10-13",
				color: "#d8dfdc",
			},
			{
				title: "Meeting",
				start: "2022-10-14T10:30:00",
				end: "2022-10-14T12:30:00",
				color: "#627d72",
			},
			{
				title: "Lunch",
				start: "2022-10-16T12:00:00",
				color: "#1e2f28",
			},
			{
				title: "Meeting",
				start: "2022-10-18T14:30:00",
				color: "#768e84",
			},
			{
				title: "Interview",
				start: "2022-10-21T17:30:00",
				color: "#899e95",
			},
			{
				title: "Meeting",
				start: "2022-10-22T20:00:00",
				color: "#355447",
			},
			{
				title: "Birthday",
				start: "2022-10-13T07:00:00",
				color: "#9daea7",
			},
			{
				title: "Click for Google",
				url: "http://google.com/",
				start: "2022-10-28",
				color: "#2f4a3f",
			},
			{
				title: "Interview",
				start: "2022-10-20",
				color: "#768e84",
			},
			{
				title: "Product Launch",
				start: "2022-10-29",
				color: "#b1beb9",
			},
			{
				title: "Leave",
				start: "2022-10-25",
				color: "#b1beb9",
			},
		],
	});

	calendar.render();
});
