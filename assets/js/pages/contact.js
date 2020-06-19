var Contact = function () {

    return {
        
        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 37.8883549,
				lng: -4.7842667,
			  });
			   var marker = map.addMarker({
		            lat: -13.004333,
					lng: -4.7842667,
		            title: 'Loop, Inc.'
		        });
			});
        }

    };
}();