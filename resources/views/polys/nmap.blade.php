@extends('polys.template')
@section('isi')
<div id="map"></div>
@stop

@section('script')
<script>
	function initMap() {
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 4,
			center: {lat: -2.4081908, lng: 110.8860732},
			mapTypeId: 'terrain'
		});
		var triangleCoords = [

		@foreach($maps as $map )
		{lat: {{$map->latitude}}, lng: {{$map->longitude}}},
		@endforeach
		];
		var bermudaTriangle = new google.maps.Polygon({
			paths: triangleCoords,
			strokeColor: '#FF0000',
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: '#FF0000',
			fillOpacity: 0.35
		});
		bermudaTriangle.setMap(map);
	}
</script>
<script async defer src="http://maps.google.com/maps/api/js?key=AIzaSyAogXD-AHrsmnWinZIyhRORJ84bgLwDPpg&callback=initMap">
</script>
@stop


