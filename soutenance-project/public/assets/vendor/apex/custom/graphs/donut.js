var options = {
	chart: {
		width: 300,
		type: "donut",
	},
	labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
	series: [20, 35, 45, 65, 40],
	legend: {
		position: "bottom",
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		width: 0,
	},
	colors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
};
var chart = new ApexCharts(document.querySelector("#donut"), options);
chart.render();
