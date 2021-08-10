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
	<title>Administration - GCE A/L Examination</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<center><h1 class="header">Administration - GCE A/L Examination</h1></center>
<center><img src="images/header.png" class="imageStudent"></center>

<center><h3 class="dashboard_h3">Add Results to Database</h3></center>
<br>
<center><a href="addResults.php"><input class="logout_button" type="submit" name="submit"  value="Add Now"></a></center>

<center><h3 class="dashboard_h3">Delete All Current Results</h3></center>
<br>
<center><a href="delete.php"><input class="logout_button" type="submit" name="submit"  value="Delete Now"></a></center>

<center><h3 class="dashboard_h3">Change Administrator Password</h3></center>
<center><a href="changePassword.php"><input class="logout_button" type="submit" name="submit"  value="Change Now"></a></center> <br>

<center><a href="logout.php"><input class="logout_button" type="submit" name="submit"  value="Logout"></a></center>
<?php } ?>