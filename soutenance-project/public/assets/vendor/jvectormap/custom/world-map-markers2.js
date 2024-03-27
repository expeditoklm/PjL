$(function () {
	$("#world-map-markers2").vectorMap({
		map: "continents_mill",
		hoverColor: false,
		zoomOnScroll: false,
		series: {
			regions: [
				{
					values: gdpData,
					scale: ["#3b5d4f", "#4f6d61", "#627d72", "#768e84", "#899e95", "#9daea7", "#b1beb9", "#c4ceca"],
				},
			],
		},
		markerStyle: {
			initial: {
				fill: "#ffffff",
				stroke: "#c84042",
				"fill-opacity": 1,
				"stroke-width": 10,
				"stroke-opacity": 0.4,
				r: 15,
			},
			hover: {
				fill: "#ffffff",
				stroke: "#ae1730",
				"fill-opacity": 0.8,
				"stroke-width": 10,
				"stroke-opacity": 0.4,
				r: 15,
				cursor: "pointer",
			},
		},
		regionStyle: {
			initial: {
				fill: "#768e84",
			},
			hover: {
				"fill-opacity": 0.8,
			},
			selected: {
				fill: "#000000",
			},
		},
		backgroundColor: "transparent",
		markers: [
			{ latLng: [12, 23], name: "Africa" },
			{ latLng: [65, 100], name: "Europe" },
			{ latLng: [37, 85], name: "Asia" },
			{ latLng: [49, -105], name: "North America" },
			{ latLng: [-15, -60], name: "South America" },
			{ latLng: [-25, 140], name: "Australia" },
		],
	});
});
