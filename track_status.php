<?php
// track_status.php — Driver’s view of current rides
?>
<!DOCTYPE html>
<html>
<head>
<title>Track Status | Driver View</title>
<style>
body{font-family:Arial;background:#fff;text-align:center;}
h2{color:#e10600;}
table{margin:auto;border-collapse:collapse;width:80%;}
th,td{border:1px solid #ccc;padding:10px;}
th{background:#e10600;color:#fff;}
.status{color:#e10600;font-weight:bold;}
button{background:#e10600;color:#fff;border:none;padding:8px 15px;border-radius:5px;}
button:hover{background:#b30400;}
</style>
</head>
<body>
<h2>Active Rides</h2>
<table>
<tr><th>Ride ID</th><th>Pickup</th><th>Drop-off</th><th>Status</th><th>Action</th></tr>
<tr><td>001</td><td>Olaya</td><td>King Fahd Rd</td><td class="status" id="st1">Pending</td><td><button onclick="updateStatus('st1')">Accept</button></td></tr>
<tr><td>002</td><td>Malaz</td><td>Riyadh Park</td><td class="status" id="st2">Pending</td><td><button onclick="updateStatus('st2')">Accept</button></td></tr>
</table>

<script>
function updateStatus(id){
 document.getElementById(id).innerText='In Progress';
 alert('Ride accepted. Start driving!');
}
</script>
</body>
</html>
