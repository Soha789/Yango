<?php
// parcel.php — Parcel delivery form
if($_SERVER['REQUEST_METHOD']=='POST'){
  echo "<script>alert('Parcel delivery booked! Redirecting to track...');window.location='track.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Send Parcel | Yango Clone</title>
<style>
body{font-family:Arial;text-align:center;background:#fff;}
form{margin:60px auto;width:340px;padding:20px;border:1px solid #ccc;border-radius:8px;}
h2{color:#e10600;}
input{width:90%;padding:10px;margin:8px 0;}
button{background:#e10600;color:#fff;padding:10px 20px;border:none;border-radius:5px;}
button:hover{background:#b30400;}
</style>
</head>
<body>
<h2>Send Parcel</h2>
<form method="POST">
  <input type="text" name="sender" placeholder="Sender Name" required><br>
  <input type="text" name="receiver" placeholder="Receiver Name" required><br>
  <input type="text" name="pickup" placeholder="Pickup Location" required><br>
  <input type="text" name="dropoff" placeholder="Delivery Location" required><br>
  <button type="submit">Send Parcel</button>
</form>
</body>
</html>
