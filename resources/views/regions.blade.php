<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="{{url('/css/page-css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/reset.css')}}"> 
     <link rel="stylesheet" type="text/css" href="{{url('/fonts/font.css')}}">
       <script src="{{url('js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{url('js/hover.js')}}"></script>
    

<div id="pages">



   <div class="logo">

      <img src="{{'/images/geotours-logo.svg'}}">
    </div>


    
    <div class="googlemap">
    <style>
       #map {
        height: 100vh;
        width:100%;
       }
    </style>
  </head>
  <body>
   
    <div id="map">
     <script>
      function initMap() {
var uluru = {lat:  {{$googlemap[0]['lat']}} , lng:{{$googlemap[0]['lng']}} };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
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
    </div>

    <div class="about-page">
    <div class="region">
      <h2>About Region </h2>
      <h3>{{$regions->regionName}}</h3>
      <h4>capital: {{$regions->regionCity}}</h4>
        <p>{{$regions->aboutTours}}</p>

     
    </div>

    <div class="tour">
      <h2>About Tours</h2>
     
    </div>

    <div class="place">
      <h2>About Places</h2>

       <p>{{$regions->aboutPlace}}</p>
    </div>

    <div class="gallery">
      <h2>Image Gallery</h2>
        <img src="{{url('/css/images/background.jpg')}}" width="150" height="100" >
         <img src="{{url('/css/images/background.jpg')}}" width="150" height="100" >
          <img src="{{url('/css/images/background.jpg')}}" width="150" height="100" >
           <img src="{{url('/css/images/background.jpg')}}" width="150" height="100" >
    </div>

    </div>
    </div>
  </body>
</html>