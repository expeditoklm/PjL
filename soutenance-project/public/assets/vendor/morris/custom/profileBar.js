// Morris Bar Chart
Morris.Bar({
	element: "profileBar",
	data: [
		{ x: "Q1", y: 200, z: 400, a: 200 },
		{ x: "Q2", y: 500, z: 300, a: 100 },
		{ x: "Q3", y: 200, z: 700, a: 400 },
		{ x: "Q4", y: 500, z: 600, a: 300 },
	],
	xkey: "x",
	ykeys: ["y", "z", "a"],
	labels: ["Y", "Z", "A"],
	resize: true,
	hideHover: "auto",
	gridLineColor: "#dfd6ff",
	barColors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
});
