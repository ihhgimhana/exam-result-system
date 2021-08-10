<?php
session_start();
error_reporting(0);
include('database.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:admin.php');
}
else{
if(isset($_POST['changepw']))
  {
$password=md5($_POST['password']);
$newpassword=md5($_POST['newpassword']);
$newpassword2=md5($_POST['newpassword2']);
$username=$_SESSION['alogin'];

if ($newpassword===$newpassword2) {
	$error2="New Passwords does not match"; 
}

$sql ="SELECT password FROM admin where username=:username and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$conn ="update admin set password=:newpassword where username=:username";
$chngpwd1 = $dbh->prepare($conn);
$chngpwd1-> bindParam(':username', $username, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is wrong";  
}
}

	?>
<head>
	<title>Change Administrator Password - GCE A/L Examination</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<center><h1 class="header">Change Administrator Password - GCE A/L Examination</h1></center>
<center><img src="images/header.png" class="imageStudent"></center>

<center><h3 class="dashboard_h3">Change Administrator Password</h3></center>
<br>

<center>
<form method="post" action="" class="form">
	
	<center><h3 class="h3">Enter Current Password</h3></center>
	<center><input type="Password" name="password" class="input"/></center>
	<br>
	<center><h3 class="h3">Enter New Password</h3></center>
	<center><input type="Password" name="newpassword" class="input"/></center>
	<br>
	<center><h3 class="h3">Re-Enter New Password</h3></center>
	<center><input type="Password" name="newpassword2" class="input"/></center>
	<br>
	<center><input type= "submit" name="changepw" class="submit" value="Submit"/></center>
</form>
	<center><a href="dashboard.php"><input class="logout_button" type="submit" name="submit"  value="Back to Dashboard"></a></center>
<?php if($error){
	echo "<script>alert('$error')</script>"; 
		} 
        else if($msg){
        echo "<script>alert('$msg')</script>";}
        else if($error2){
        echo "<script>alert('$error2')</script>";}
         ?>
</center>
<?php } ?>