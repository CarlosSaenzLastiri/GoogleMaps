<?php
  require "conexion.php";

  session_start();

  if (!isset($_SESSION["usuario"])) {
  	 die("<script>location.href='login.php';</script>");
  }

  $sql = "SELECT * FROM ubicasionsensor";
  $resultado = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html>
<title>Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="contenedor">	
		<?php include_once("vistas/menu.php") ?>
		<section>
		   <center>
			 <? echo $_SESSION["usuario"]; ?>
			



<!-- !PAGE CONTENT! -->

<style>

  
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
       height: 800px;  /* The height is 400 pixels */
        width: 100%;

      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        
        
      }
    </style>
  </head>
  <body>
   <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {

 
  var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat:  19.4978, lng: -99.1269}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = '12345678910';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }

      var locations = [
      <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
        {lat: <?php echo $row['Latitud']; ?>, lng: <?php echo $row['Longitud']; ?>},
      <?php } ?>
      ]
      
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP8THbEiB_fsGhgFkWPrWCjC4hVYchc_Q&callback=initMap"
    async defer></script>


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>


		    
		</section>	
		
	</div>
</body>
	
</html>

