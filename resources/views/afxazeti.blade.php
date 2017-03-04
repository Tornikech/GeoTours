<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">  

<div id="pages">
    <div class="googlemap">
    <style>
       #map {
        height: 500px;
        width:100%;
       }
    </style>
  </head>
  <body>
   
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -34.397, lng: 150.644};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOPRlmqE56JJl7pYOXMSwVZb6YCw9Q28k&callback=initMap">
    </script>


    </div>

    <div class="about-page">
    <h3>About Region</h3>
    <h3>About Tours</h3>
    <h3>About Places</h3>
    <h3>Image Gallery</h3>

    </div>
    </div>
  </body>
</html>