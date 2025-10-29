<?php
// index.php — Homepage
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Yango Clone | Home</title>
<style>
body {font-family:Arial, sans-serif;margin:0;background:#fff;color:#111;}
header {background:#e10600;color:#fff;padding:15px;text-align:center;}
nav a {color:#fff;text-decoration:none;margin:0 15px;font-weight:bold;}
.hero {text-align:center;padding:60px 20px;}
.hero h1 {color:#e10600;}
.btn {background:#e10600;color:#fff;padding:12px 20px;border:none;border-radius:5px;cursor:pointer;}
.btn:hover {background:#b30400;}
footer {background:#f2f2f2;text-align:center;padding:15px;}
</style>
</head>
<body>
<header>
  <h2>Yango Ride & Delivery</h2>
  <nav>
    <a href="index.php">Home</a>
    <a href="ride.php">Book Ride</a>
    <a href="parcel.php">Send Parcel</a>
    <a href="track.php">Track</a>
    <a href="login.php">Login</a>
  </nav>
</header>

<section class="hero">
  <h1>Fast. Safe. Reliable.</h1>
  <p>Book rides or send parcels instantly across the city!</p>
  <button class="btn" onclick="window.location.href='signup.php'">Get Started</button>
</section>

<footer>
  &copy; 2025 Yango Clone | All Rights Reserved
</footer>
</body>
</html>
