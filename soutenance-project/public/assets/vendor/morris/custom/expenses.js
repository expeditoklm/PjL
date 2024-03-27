// Graph 1
Morris.Donut({
	element: "donut1",
	data: [
		{ value: 60, label: "Q1 Income", formatted: "160k" },
		{ value: 40, label: "Q1 Expenses", formatted: "90k" },
	],
	resize: true,
	hideHover: "auto",
	formatter: function (x, data) {
		return data.formatted;
	},
	labelColor: "#594323",
	colors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
});


// Graph 2
Morris.Donut({
	element: "donut2",
	data: [
		{ value: 70, label: "Q2 Income", formatted: "190k" },
		{ value: 30, label: "Q2 Expenses", formatted: "45k" },
	],
	resize: true,
	hideHover: "auto",
	formatter: function (x, data) {
		return data.formatted;
	},
	labelColor: "#594323",
	colors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
});


// Graph 3
Morris.Donut({
	element: "donut3",
	data: [
		{ value: 80, label: "Q3 Income", formatted: "250k" },
		{ value: 20, label: "Q3 Expenses", formatted: "45k" },
	],
	resize: true,
	hideHover: "auto",
	formatter: function (x, data) {
		return data.formatted;
	},
	labelColor: "#594323",
	colors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
});


// Graph 4
Morris.Donut({
	element: "donut4",
	data: [
		{ value: 55, label: "Q4 Income", formatted: "290k" },
		{ value: 45, label: "Q4 Expenses", formatted: "68k" },
	],
	resize: true,
	hideHover: "auto",
	formatter: function (x, data) {
		return data.formatted;
	},
	labelColor: "#594323",
	colors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
});
