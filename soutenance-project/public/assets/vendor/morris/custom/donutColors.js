// Morris Donut
Morris.Donut({
	element: "donutColors",
	data: [
		{ value: 30, label: "foo" },
		{ value: 15, label: "bar" },
		{ value: 10, label: "baz" },
		{ value: 5, label: "A really really long label" },
	],
	backgroundColor: "#17181c",
	labelColor: "#17181c",
	colors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
	resize: true,
	hideHover: "auto",
	gridLineColor: "#dfd6ff",
	formatter: function (x) {
		return x + "%";
	},
});
