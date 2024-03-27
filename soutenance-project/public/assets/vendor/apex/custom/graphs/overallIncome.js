var options = {
	chart: {
		height: 330,
		type: "area",
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: [3, 1],
	},
	series: [
		{
			name: "Images",
			data: [10, 40, 15, 50, 20, 35, 20, 10, 31, 43, 76, 29],
		},
		{
			name: "Documents",
			data: [2, 8, 25, 7, 15, 26, 51, 35, 42, 20, 33, 67],
		},
	],
	grid: {
		borderColor: "#cccccc",
		strokeDashArray: 2,
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
			bottom: 10,
			left: 0,
		},
	},
	xaxis: {
		categories: [
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		],
	},
	yaxis: {
		labels: {
			show: false,
		},
	},
	colors: ["#3b5d4f", "#cccccc"],
	markers: {
		size: 0,
		opacity: 0.9,
		colors: ["#3b5d4f", "#cccccc"],
		strokeColor: "#f9f9f9",
		strokeWidth: 1,
		hover: {
			size: 7,
		},
	},
};

var chart = new ApexCharts(document.querySelector("#overallIncome"), options);

chart.render();