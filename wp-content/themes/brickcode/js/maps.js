var styles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.natural.terrain",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#595143"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": "57"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    }
];

$(document).ready(function() {

  function initialize() {


    var gmarkers = [];
    var map = null;
    var infowindow = null;


      var mapOptions = {
        center: new google.maps.LatLng(data_loc1,data_loc2),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        zoomControl: true,
        scaleControl: false,
        styles: styles,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        draggable: false
      };


      map = new google.maps.Map(document.getElementById("mack-map"), mapOptions);

      google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
      });

      /*var locations = [
        ['Brick', 19.4316386, -99.1916854]
       ];*/

      /*infowindow = new google.maps.InfoWindow({
        size: new google.maps.Size(150,50)
      });*/

      function setMarkers(locations) {
        for (var i = 0; i < locations.length; i++) {
          var location = locations[i];
          var myLatLng = new google.maps.LatLng(location[1], location[2]);
          var marker = new google.maps.Marker({
              position: myLatLng,
              animation: google.maps.Animation.DROP,
              map: map,
              title: location[0],
              icon: "http://capa2.developer.velosoft.net/demobrick/wp-content/themes/brickcode/images/zonas/pin-marker.png",
              title: 'Espacio 7'
          });

          // Standard markers - if not using infobox
          google.maps.event.addListener(marker, "click", function () {
          map.setCenter(marker.getPosition());
          infowindow.setContent(this.html);
          infowindow.open(map, this);
          });
          gmarkers.push(marker);
        }
      }

      // Add the markers
      setMarkers(locations);

  }

  // add window listener for GMaps
  google.maps.event.addDomListener(window, 'load', initialize);

});
