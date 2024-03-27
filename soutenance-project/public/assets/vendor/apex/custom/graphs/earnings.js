var options = {
	series: [32500, 29700, 24200],
	chart: {
		height: 250,
		type: "polarArea",
	},
	labels: ["USA", "India", "Brazil"],
	fill: {
		opacity: 1,
	},
	stroke: {
		width: 2,
		colors: ["#c84042", "#21538d", "#dfa71c", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
	},
	colors: ["#c84042", "#21538d", "#dfa71c", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
	yaxis: {
		show: false,
	},
	legend: {
		show: false,
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
	plotOptions: {
		polarArea: {
			rings: {
				strokeWidth: 0,
			},
			spokes: {
				strokeWidth: 0,
			},
		},
	},
};

var chart = new ApexCharts(document.querySelector("#earnings"), options);
chart.render();