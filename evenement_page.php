<!--
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>[GoogleMaps API V3] Insertion d'une Carte</title>
<style type="text/css">
#div_carte {
height : 600px; /* IMPERATIF */
width : 600px;
margin : auto;
border : 1px solid #888;
}
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initCarte(){
// création de la carte
var oMap = new google.maps.Map( document.getElementById( 'div_carte'),{
'center' : new google.maps.LatLng( 46.80, 1.70),
'zoom' : 6,
'mapTypeId' : google.maps.MapTypeId.ROADMAP
});
}
// init lorsque la page est chargée
google.maps.event.addDomListener( window, 'load', initCarte);
</script>
</head>
<body>
<h1>Titre de la carte</h1>
<div id="div_carte"></div>







https://www.coordonnees-gps.fr/conversion-coordonnees-gps







	<div class="gps">
                <h3>Position du véhicule</h3>
                <p>(Dernière position connue)</p>
                <div id="googleMap" style="width: 100%;height: 450px;"></div>
                <?php
                $reponse = $pdo->prepare('SELECT * FROM historique WHERE immat = ? ORDER BY date DESC LIMIT 0, 1');
                $reponse->execute([$data->immat]);
                while($donnees = $reponse->fetch())
                {
                    ?>
                    <script>
                        function myMap()
                        {
                            var px = <? echo $donnees->px; ?>;
                            var py = <? echo $donnees->py; ?>;
                            var myCenter = new google.maps.LatLng(px,py);
                            var mapCanvas = document.getElementById("googleMap");
                            var mapOptions = {center : myCenter, zoom:15};
                            var map = new google.maps.Map(mapCanvas, mapOptions);
                            var marker = new google.maps.Marker({position:myCenter});
                            marker.setMap(map);
                            var infowindow = new google.maps.InfoWindow({
                                content: "Votre véhicule"
                            });
                            infowindow.open(map,marker);
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrbuWhelzzummlwLsIJYN_lFv-DA66FAk&callback=myMap"></script>
                    <?php
                }
                ?>
	</div>

</body>
</html> -->

<!DOCTYPE html>
<html>
  <head>
    <title>Place ID Finder</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        background-color: #fff;
        border-radius: 2px;
        border: 1px solid transparent;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        box-sizing: border-box;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        height: 29px;
        margin-left: 17px;
        margin-top: 10px;
        outline: none;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      .controls:focus {
        border-color: #4d90fe;
      }
      .title {
        font-weight: bold;
      }
      #infowindow-content {
        display: none;
      }
      #map #infowindow-content {
        display: inline;
      }

    </style>
  </head>
  <body>
    <input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
    <div id="map"></div>
    <div id="infowindow-content">
      <span id="place-name"  class="title"></span><br>
      Place ID <span id="place-id"></span><br>
      <span id="place-address"></span>
    </div>

    <script>
      // This sample uses the Place Autocomplete widget to allow the user to search
      // for and select a place. The sample then displays an info window containing
      // the place ID and other information about the place that the user has
      // selected.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13
        });

        var input = document.getElementById('pac-input');

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            return;
          }

          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
          }

          // Set the position of the marker using the place ID and location.
          marker.setPlace({
            placeId: place.place_id,
            location: place.geometry.location
          });
          marker.setVisible(true);

          document.getElementById('place-name').textContent = place.name;
          document.getElementById('place-id').textContent = place.place_id;
          document.getElementById('place-address').textContent =
              place.formatted_address;
          infowindow.setContent(document.getElementById('infowindow-content'));
          infowindow.open(map, marker);
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrbuWhelzzummlwLsIJYN_lFv-DA66FAk&libraries=places&callback=initMap"
        async defer></script>
  </body>
</html>
