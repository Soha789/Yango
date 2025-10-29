<?php
// login.php — Login form
if($_SERVER['REQUEST_METHOD']=='POST'){
  echo "<script>alert('Login successful!');window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login | Yango Clone</title>
<style>
body{font-family:Arial;text-align:center;background:#fff;}
form{margin:80px auto;width:300px;padding:25px;border:1px solid #ccc;border-radius:8px;}
h2{color:#e10600;}
input{width:90%;padding:10px;margin:8px 0;}
button{background:#e10600;color:#fff;padding:10px 20px;border:none;border-radius:5px;}
button:hover{background:#b30400;}
a{color:#e10600;text-decoration:none;}
</style>
</head>
<body>
<h2>Login</h2>
<form method="POST">
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button><br><br>
  <a href="signup.php">Create Account</a>
</form>
</body>
</html>
