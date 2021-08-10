<?php
session_start();
error_reporting(0);
include('database.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:admin.php');
}
else{?>
<head>
	<title>Delete Results - GCE A/L Examination</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<center><h1 class="header">Delete Results - GCE A/L Examination</h1></center>
<center><img src="images/header.png" class="imageStudent"></center>

<center><h3 class="dashboard_h3">Are you sure you want to DELETE ALL RESULTS OF THE DATABASE?</h3></center>
<br>
<center><div>
	<a href="deleted.php"><input class="logout_button" type="submit" name="submit"  value="Yes"></a>
	<a href="dashboard.php"><input class="logout_button" type="submit" name="submit"  value="No"></a>
</div></center>

<?php } ?>