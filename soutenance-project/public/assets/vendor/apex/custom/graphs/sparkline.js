// Sparkline 1

// var options1 = {
// 	series: [50],
// 	chart: {
// 		type: "radialBar",
// 		width: 60,
// 		height: 60,
// 		sparkline: {
// 			enabled: true,
// 		},
// 	},
// 	dataLabels: {
// 		enabled: false,
// 	},
// 	plotOptions: {
// 		radialBar: {
// 			hollow: {
// 				margin: 0,
// 				size: "60%",
// 			},
// 			track: {
// 				margin: 0,
// 				background: "#ffffff",
// 			},
// 			dataLabels: {
// 				show: false,
// 			},
// 		},
// 	},
// 	colors: ["#3b5d4f", "#000000"],
// };

// var chart1 = new ApexCharts(document.querySelector("#sparkline1"), options1);
// chart1.render();


// Sparkline 2
// var options2 = {
// 	series: [60],
// 	chart: {
// 		type: "radialBar",
// 		width: 60,
// 		height: 60,
// 		sparkline: {
// 			enabled: true,
// 		},
// 	},
// 	dataLabels: {
// 		enabled: false,
// 	},
// 	plotOptions: {
// 		radialBar: {
// 			hollow: {
// 				margin: 0,
// 				size: "60%",
// 			},
// 			track: {
// 				margin: 0,
// 				background: "#ffffff",
// 			},
// 			dataLabels: {
// 				show: false,
// 			},
// 		},
// 	},
// 	colors: ["#c84042", "#ffffff"],
// };

// var chart2 = new ApexCharts(document.querySelector("#sparkline2"), options2);
// chart2.render();


// Sparkline 3
// var options3 = {
// 	series: [
// 		{
// 			data: [30, 90, 60, 75, 45, 30],
// 		},
// 	],
// 	chart: {
// 		type: "bar",
// 		height: 60,
// 		width: 60,
// 		sparkline: {
// 			enabled: true,
// 		},
// 	},
// 	stroke: {
// 		show: false,
// 		width: 0,
// 	},
// 	plotOptions: {
// 		bar: {
// 			columnWidth: "70%",
// 			borderRadius: 2,
// 			distributed: true,
// 			dataLabels: {
// 				position: "top",
// 			},
// 		},
// 	},
// 	tooltip: {
// 		fixed: {
// 			enabled: false,
// 		},
// 		x: {
// 			show: false,
// 		},
// 		y: {
// 			title: {
// 				formatter: function (seriesName) {
// 					return "";
// 				},
// 			},
// 		},
// 		marker: {
// 			show: false,
// 		},
// 	},
// 	colors: ["#0a50d8", "#eaf1ff"],
// };

// var chart3 = new ApexCharts(document.querySelector("#sparkline3"), options3);
// chart3.render();


// Sparkline 1
var options1 = {
	series: [
		{
			data: [10, 5, 15, 10, 15, 10],
		},
	],
	chart: {
		type: "line",
		height: 60,
		width: 60,
		sparkline: {
			enabled: true,
		},
	},
	stroke: {
		width: 5,
	},
	colors: ["#c84042"],
	plotOptions: {
		bar: {
			columnWidth: "70%",
			borderRadius: 5,
			distributed: true,
			dataLabels: {
				position: "top",
			},
		},
	},
	tooltip: {
		fixed: {
			enabled: false,
		},
		x: {
			show: false,
		},
		y: {
			title: {
				formatter: function (seriesName) {
					return "";
				},
			},
		},
		marker: {
			show: false,
		},
	},
};

var chart1 = new ApexCharts(document.querySelector("#sparkline1"), options1);
chart1.render();



// Sparkline 2
var options2 = {
	series: [
		{
			data: [10, 5, 15, 10, 15, 10],
		},
	],
	chart: {
		type: "line",
		height: 60,
		width: 60,
		sparkline: {
			enabled: true,
		},
	},
	stroke: {
		width: 5,
	},
	colors: ["#21538d"],
	plotOptions: {
		bar: {
			columnWidth: "70%",
			borderRadius: 5,
			distributed: true,
			dataLabels: {
				position: "top",
			},
		},
	},
	tooltip: {
		fixed: {
			enabled: false,
		},
		x: {
			show: false,
		},
		y: {
			title: {
				formatter: function (seriesName) {
					return "";
				},
			},
		},
		marker: {
			show: false,
		},
	},
};

var chart2 = new ApexCharts(document.querySelector("#sparkline2"), options2);
chart2.render();