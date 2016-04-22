/*
 * Google Map Functions
 */

function initMap() {
  var location = new google.maps.LatLng(36.1654401, -115.3410981);
  var mapOptions = {
    center: location,
    zoom: 13,
    scrollwheel: false,
    disableDefaultUI: true,
  };
  var styles = [
    {
      "featureType": "poi",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "landscape.man_made",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#868080" },
        { "saturation": -34 },
        { "lightness": 74 }
      ]
    },{
      "featureType": "road.highway",
      "stylers": [
        { "color": "#808080" },
        { "lightness": 39 }
      ]
    },{
      "featureType": "water",
      "stylers": [
        { "color": "#968080" },
        { "hue": "#ffe500" },
        { "saturation": 23 },
        { "lightness": 37 }
      ]
    }
  ];
  var mapDiv = document.getElementById('map');
  var map = new google.maps.Map(mapDiv, mapOptions);
  map.setOptions({styles: styles});
  var templateUrl = object_name.templateUrl;
  var image = templateUrl+'/assets/images/map-marker.svg';
  var beachMarker = new google.maps.Marker({
    position: {lat: 36.1654401, lng: -115.3410981},
    map: map,
    icon: image
  });
}
