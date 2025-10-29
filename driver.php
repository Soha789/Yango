<?php
// driver.php — Driver portal
if($_SERVER['REQUEST_METHOD']=='POST'){
  echo "<script>alert('Driver logged in. Ready for rides!');window.location='track_status.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Driver Portal | Yango Clone</title>
<style>
body{font-family:Arial;text-align:center;background:#fff;}
form{margin:80px auto;width:300px;padding:25px;border:1px solid #ccc;border-radius:8px;}
h2{color:#e10600;}
input{width:90%;padding:10px;margin:8px 0;}
button{background:#e10600;color:#fff;padding:10px 20px;border:none;border-radius:5px;}
button:hover{background:#b30400;}
</style>
</head>
<body>
<h2>Driver Login / Register</h2>
<form method="POST">
  <input type="text" name="driver" placeholder="Driver Name" required><br>
  <input type="password" name="pass" placeholder="Password" required><br>
  <button type="submit">Login</button>
</form>
</body>
</html>
