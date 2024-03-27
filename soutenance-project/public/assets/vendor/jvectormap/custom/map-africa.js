// Africa
$(function () {
	$("#mapAfrica").vectorMap({
		map: "africa_mill",
		backgroundColor: "transparent",
		scaleColors: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
		zoomOnScroll: false,
		zoomMin: 1,
		hoverColor: true,
		series: {
			regions: [
				{
					values: gdpData,
					scale: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
					normalizeFunction: "polynomial",
				},
			],
		},
	});
});
