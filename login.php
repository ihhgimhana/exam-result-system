<?php
session_start();
include('database.php');
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT username,password FROM admin WHERE username=:username and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Credentials');</script>";
}
}
?>