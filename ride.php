<?php
// ride.php — Book Ride
if($_SERVER['REQUEST_METHOD']=='POST'){
  echo "<script>alert('Ride booked successfully! Redirecting to track page...');window.location='track.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Ride | Yango Clone</title>
<style>
body{font-family:Arial;background:#fff;color:#111;text-align:center;}
form{margin:60px auto;width:320px;padding:20px;border:1px solid #ccc;border-radius:8px;}
h2{color:#e10600;}
input{width:90%;padding:10px;margin:8px 0;}
button{background:#e10600;color:#fff;padding:10px 20px;border:none;border-radius:5px;}
button:hover{background:#b30400;}
</style>
</head>
<body>
<h2>Book a Ride</h2>
<form method="POST">
  <input type="text" name="pickup" placeholder="Pickup Location" required><br>
  <input type="text" name="dropoff" placeholder="Drop-off Location" required><br>
  <button type="submit">Book Ride</button>
</form>
</body>
</html>
