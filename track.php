<?php
// track.php — Real map tracking simulation using Leaflet
?>
<!DOCTYPE html>
<html>
<head>
<title>Track Ride | Yango Clone</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{margin:0;font-family:Arial;background:#fff;}
header{background:#e10600;color:#fff;text-align:center;padding:10px;}
#map{height:80vh;width:100%;}
button{background:#e10600;color:#fff;border:none;padding:10px 20px;margin:10px;border-radius:5px;}
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body>
<header>
  <h2>Live Ride Tracking</h2>
</header>
<div id="map"></div>
<div style="text-align:center;">
  <button onclick="simulate()">Simulate Movement</button>
</div>
<script>
var map = L.map('map').setView([24.7136,46.6753], 13); // Riyadh
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom:19}).addTo(map);
var pickup = [24.7136,46.6753];
var drop = [24.7465,46.7007];
L.marker(pickup).addTo(map).bindPopup("Pickup");
L.marker(drop).addTo(map).bindPopup("Drop-off");
var driver = L.marker(pickup,{draggable:false}).addTo(map).bindPopup("Driver");

function simulate(){
  var lat = pickup[0], lon = pickup[1];
  var step = 0;
  var interval = setInterval(()=>{
    if(step>100){clearInterval(interval);alert('Driver reached destination!');}
    lat += (drop[0]-pickup[0])/100;
    lon += (drop[1]-pickup[1])/100;
    driver.setLatLng([lat,lon]);
    step++;
  },200);
}
</script>
</body>
</html>
