
<?php

require("../control/login.php");
if(isset($_SESSION['username'])){
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Railway Home Page</title>
</head>
<body>
	<h1>Welcome to Railway Ticket System</h1>
	<ul>
		<li><a href="../model/db.php">View User Information</a></li>
		<li><a href="../model/ticket_info.php">View Ticket Information</a></li>
		<li><a href="../model/schedule_info.php">View Schedule Information</a></li>
	</ul>
</body>
</html>
