<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "exam";

$conn = mysqli_connect($host , $user , $pass, $database);

session_start();

$user_check = $_SESSION['login_user'];
$query = "SELECT username from user where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>