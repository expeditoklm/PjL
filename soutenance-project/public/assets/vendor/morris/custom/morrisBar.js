// Morris Bar Chart
Morris.Bar({
	element: "morrisBar",
	data: [
		{ x: "2023 Q1", y: 2, z: 4, a: 2 },
		{ x: "2023 Q2", y: 5, z: 3, a: 1 },
		{ x: "2023 Q3", y: 2, z: 7, a: 4 },
		{ x: "2023 Q4", y: 5, z: 6, a: 3 },
	],
	xkey: "x",
	ykeys: ["y", "z", "a"],
	labels: ["Y", "Z", "A"],
	resize: true,
	hideHover: "auto",
	gridLineColor: "#dfd6ff",
	barColors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
});
