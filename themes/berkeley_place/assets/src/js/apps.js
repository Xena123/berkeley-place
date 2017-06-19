$(document).ready(function() {

	// Range Slider. Docs: http://ionden.com/a/plugins/ion.rangeSlider/en.html
		// Search Bar Slider for distance field
		$("#search-distance").ionRangeSlider({
			min: 0,
			max: 100,
			type: "single",
			grid: false,
			hide_min_max: true,
			force_edges: true,
			values: [
				5,
				10,
				15,
				20,
				30,
				50,
				"Any" 
			]
		});
		// Search Bar Slider for salary field
		$("#search-salary").ionRangeSlider({
			min: 0,
			max: 100000,
			from: 3,
			to: 15,
			type: "double",
			prefix: "£",
			max_prefix: "",
			prettify_enabled: true,
			prettify_separator: ",",
			hide_min_max: true,
			force_edges: true,
			values: [
				0,
				5000,
				10000,
				15000,
				20000,
				25000,
				30000,
				35000,
				40000,
				45000,
				50000,
				55000,
				60000,
				65000,
				70000,
				75000,
				80000,
				85000,
				90000,
				95000,
				"Any" 
			]			
		});

		// Replace miles preview with number from slider
		function checkDistance() {
			var $searchDistance = $('.js-search-field .irs-single').text();
			$('.c-search__distance-miles').text($searchDistance);	
		}
			// Check & update distance on start
			checkDistance();
			// Check & update distance when slider moves
			$('#search-distance').change(checkDistance);
});