var map;
function initialize() {
  var mapOptions = {
    zoom: 6,
    center: new google.maps.LatLng(45.526756,-122.572636)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

  var marker = new google.maps.Marker({
    position: mapOptions, center
    map: map,
    title: 'Central Bible Church'

google.maps.event.addDomListener(window, 'load', initialize);
