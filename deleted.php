<?php
session_start();
error_reporting(0);
include('database.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:admin.php');
}
else{


$host = "localhost";
$user = "root";
$pass = "";
$database = "exam";

$conn = mysqli_connect($host , $user , $pass, $database);
$query = "TRUNCATE TABLE `results`";
if ($result = $conn->query($query)){
	echo "<script>alert('All Results Deleted Succesfully')</script>";
}
else{
	echo "<script>alert('Something Wrong')</script>";
}
echo "<center><a href='dashboard.php'><input class='logout_button' type='submit' name='submit'  value='Back to Dashboard'></a></center>";
} ?>


<link rel="stylesheet" type="text/css" href="style.css">