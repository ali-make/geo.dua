	<!--javascript map-->
	<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
	<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
	<script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
	<script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
	<script>
		const platform = new H.service.Platform({
			apikey: 'erJKYxXQ3EhfZ8QUqu9ZMSVXCOK4S_Jp0AFQjFMCZXQ'
		});
		const defaultLayers = platform.createDefaultLayers();
		const map = new H.Map(document.getElementById('map'),
			defaultLayers.vector.normal.map, {
				center: {
					lat: -6.331368,
					lng: 107.282793
				},
				zoom: 16,
				pixelRatio: window.devicePixelRatio || 1
			});
		window.addEventListener('resize', () => map.getViewPort().resize());
		const behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
		const ui = H.ui.UI.createDefault(map, defaultLayers);

		//Begin geocoding
		const searchText = 'Jl. Pandu, Sukaluyu, Kec. Telukjambe Tim., Kabupaten Karawang, Jawa Barat 41361';
		const geocoder = platform.getGeocodingService();
		geocoder.geocode({
			searchText
		}, result => {
			const location = result.Response.View[0].Result[0].Location.DisplayPosition;
			const {
				Latitude: lat,
				Longitude: lng
			} = location;
			const marker = new H.map.Marker({
				lat,
				lng
			});
			map.addObject(marker);
		});
	</script>