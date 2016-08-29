<div id="contact-block" class="contact-block">
  
  <h4>CONTACT</h4>

  <div class="divider"></div>

  <div class="google-map"></div>

  <div class="contact-block-inner-wrap">
    <div class="contact-inner-block">
      <div class="contact-icon contact-icon-phone"></div>
      <p><a href="tel:+4527522442">+4527522442</a></p>
    </div>
    <div class="contact-inner-block">
      <div class="contact-icon contact-icon-marker"></div>
      <p> Vagtelvej 59 <br> 2000 Frederiksberg </p>
    </div>
    <div class="contact-inner-block">
      <div class="contact-icon contact-icon-mail"></div>
      <p><a href="mailto:lukas@shine-up.dk">lukas@shine-up.dk</a></p>
    </div>
  </div>

  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAajMGMY3ktImXJw8HuxkCBzcRMk6QCDBc"></script>

  <script type="text/javascript">

    function initialize() {

      var customMapType = new google.maps.StyledMapType([
        {
          "featureType": "landscape.natural",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "color": "#e0efef"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "hue": "#1900ff"
            },
            {
              "color": "#c0e8e8"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            {
              "lightness": 100
            },
            {
              "visibility": "simplified"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "geometry",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "lightness": 700
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "all",
          "stylers": [
            {
              "color": "#7dcdcd"
            }
          ]
        }
      ], {
        name: 'Custom Style'
      });

      var customMapTypeId = 'custom_style';

      var mapProp = {
        center: new google.maps.LatLng(55.65393, 11.8653946),
        zoom: 8,
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
        }
      };

      var map = new google.maps.Map( document.querySelector('.google-map'), mapProp );

      map.mapTypes.set(customMapTypeId, customMapType);
      map.setMapTypeId(customMapTypeId);

    }

    google.maps.event.addDomListener(window, 'load', initialize);

  </script>

</div>