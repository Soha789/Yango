<?php
// signup.php — Signup form
if($_SERVER['REQUEST_METHOD']=='POST'){
  echo "<script>alert('Signup successful! Redirecting to login...');window.location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Signup | Yango Clone</title>
<style>
body{font-family:Arial;background:#fff;color:#111;text-align:center;}
form{margin:80px auto;width:300px;padding:25px;border:1px solid #ccc;border-radius:8px;}
h2{color:#e10600;}
input{width:90%;padding:10px;margin:8px 0;}
button{background:#e10600;color:#fff;padding:10px 20px;border:none;border-radius:5px;}
button:hover{background:#b30400;}
a{color:#e10600;text-decoration:none;}
</style>
</head>
<body>
<h2>Create Account</h2>
<form method="POST">
  <input type="text" name="name" placeholder="Full Name" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Signup</button><br><br>
  <a href="login.php">Already have an account? Login</a>
</form>
</body>
</html>
