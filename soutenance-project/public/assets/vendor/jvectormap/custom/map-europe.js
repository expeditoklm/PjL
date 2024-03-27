// Europe
$(function () {
	$("#mapEurope").vectorMap({
		map: "europe_mill",
		zoomOnScroll: false,
		series: {
			regions: [
				{
					values: gdpData,
					scale: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
					normalizeFunction: "polynomial",
				},
			],
		},
		backgroundColor: "transparent",
	});
});
