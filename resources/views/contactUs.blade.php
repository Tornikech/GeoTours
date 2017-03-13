<!DOCTYPE html>
<html>
<head>
	<title>GeoTours Contact</title>
	
	<link rel="stylesheet" type="text/css" href={{url('/css/contact.css')}}>
	 <link rel="stylesheet" type="text/css" href={{url('/fonts/font.css')}}>
	 <link rel="stylesheet" type="text/css" href={{url('/css/reset.css')}}>
</head>
<body>

<div id="pages">



   <div class="logo">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  " xml:space="preserve">
<style type="text/css">
    .st0{fill:#177C3E;}
    .st1{font-family:'HelveticaNeueLTStd-Bd';}
    .st2{font-size:32.3199px;}
    .size{width:90px; height: 90px;}
</style>
<g id="XMLID_5_">
    <g id="XMLID_8_">
        <path id="XMLID_14_" class="st0 size" d="M32.5,44l-5.4,15.3C26.6,61,24.7,62,23,61.5c-1.7-0.5-2.7-2.3-2.2-4L26,38.2
            c0.2,0.7,0.4,1,0.7,1.3L32.5,44z"/>
        <path id="XMLID_13_" class="st0 size" d="M20.6,26.6c0.3,3.1,1.3,5,4,7.3L30,13.9C20.8,5,19.2,12.9,20.6,26.6z"/>
        <path id="XMLID_12_" class="st0 size" d="M39.3,13.6c2.9,0.2,5.4-2.2,5.5-5.1c0.1-3-2.2-5.4-5.1-5.5c-2.9,0-5.3,2.4-5.3,5.3
            C34.3,11.1,36.6,13.5,39.3,13.6z"/>
        <path id="XMLID_11_" class="st0 size" d="M53.9,31.7c0,0-16.5-17-14.6-15c-3.9-4.2-6.7-3.9-8,1.2l-4.1,15.1c-0.8,2.9,0.5,4.1,1.3,4.8
            l11,8.8l0,11.8c0,1.8,1.5,3.2,3.3,3.2c1.8,0,3.1-1.5,3.1-3.3V45.2c-0.1-1-0.2-1.9-1-2.6l-9.2-7.9l3.8-10.9l11.3,10.9v25.7
            c0,0.8,0.7,1.2,1.2,1.2c0.5,0,1-0.4,1-1.2l0-24.9c0.6-0.2,1-0.4,1.3-0.9C55.1,33.5,55,32.9,53.9,31.7z"/>
        <path id="XMLID_10_" class="st0 size" d="M54.1,31.3"/>
        <path id="XMLID_9_" class="st0 size" d="M19.4,63.8"/>
    </g>
    <text id="XMLID_7_" transform="matrix(1 0 0 1 -1.1069 82.0432)" class="st0 st1 st2 size">Tours</text>
</g>
</svg>
        
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


<div class="contactuspage">
	<h1>Contact  Form</h1>

	@if(Session::has('success'))
	    <div class="alert alert-success">
	      {{ Session::get('success') }}
	    </div>
	@endif

	{!! Form::open(['route'=>'contactus.store']) !!}

		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			
			{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
			<span class="text-danger">{{ $errors->first('name') }}</span>
		</div>

		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			
			{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
			<span class="text-danger">{{ $errors->first('email') }}</span>
		</div>

		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
			
			{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
			<span class="text-danger">{{ $errors->first('message') }}</span>
		</div>

		<div class="form-group">
			<button class="btn btn-success">Contact US!</button>
		</div>

	{!! Form::close() !!}

</div>



</body>
</html>