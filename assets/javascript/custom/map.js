/*
 * Google Map Functions
 */

function detectmob() {
  if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
    return true;
  }
  else {
    return false;
  }
}

function initMap() {
  var lat = 36.1596259;
  var long = -115.3170515;
  var location = new google.maps.LatLng(lat, long);
  var mapOptions = {
    center: location,
    zoom: 12,
    scrollwheel: false,
    disableDefaultUI: true,
    zoomControl: true,
  };
  // Remove control on mobile
  // https://premium.wpmudev.org/forums/topic/disable-panning-and-zoom-in-out-of-google-maps
  if (detectmob() == true) {
    mapOptions.zoomControl=false;
    mapOptions.panControl=false;
    mapOptions.draggable=false;
  }
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
  var image = templateUrl+'/assets/images/map-marker.png';
  var beachMarker = new google.maps.Marker({
    position: {lat: lat, lng: long},
    map: map,
    icon: image
  });
}
