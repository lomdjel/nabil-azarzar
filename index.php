<!doctype html>
<!--[if IE 9]><html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]--> 

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Nabil Azarzar - Sleek, Modern & Innovative Music</title>
  <link rel="icon" type="image/png" href="favicon.png?v=0.1" />
  
  <link rel="stylesheet" href="app/css/gear.css?v=0.1">
  <link rel="stylesheet" href="app/css/styles.css?v=0.1">
  <link link rel="stylesheet" href="app/css/gear.css">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>
<body>
	
	<div class="stage">
	    <!-- your content here -->
	</div>
	
	<div class="gearWrap"> 
		<div id="gearContainer" class="gear" data-gear="app/json/album.json"></div> 
		<div data-gearPath="app/json/album.json">
	</div>
	
<script src="app/js/jquery.min.js"></script>
  <script src="app/js/foundation.min.js"></script>
  
  <script src="http://connect.soundcloud.com/sdk.js"></script>

  <script src="app/js/jquery.gearplayer.libs.min.js"></script>
  <script src="app/js/jquery.gearplayer.min.js"></script>
  
  <script text="javascript">
  jQuery(document).ready(function(){ 
	  jQuery('.gearWrap').gearPlayer();
	});
  </script>
  
  <!-- <script src="js/app.js"></script> -->



</body>
</html>