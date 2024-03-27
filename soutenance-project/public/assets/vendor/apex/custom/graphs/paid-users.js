var options = {
	chart: {
		height: 250,
		type: "bar",
		toolbar: {
			show: false,
		},
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: "20px",
			borderRadius: 0,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		show: true,
		width: 2,
		colors: ["#c84042", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
	},
	series: [
		{
			name: "Paid Users",
			data: [5500, 4500, 4000, 3500, 3000, 2500, 2000],
		}
	],
	legend: {
		show: false,
	},
	xaxis: {
		categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
	},
	yaxis: {
		show: false,
	},
	fill: {
		opacity: 1,
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
	grid: {
		borderColor: "#ccd2da",
		strokeDashArray: 3,
		xaxis: {
			lines: {
				show: true,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0,
		},
	},
	colors: ["#c84042", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
};
var chart = new ApexCharts(document.querySelector("#paidUsers"), options);
chart.render();