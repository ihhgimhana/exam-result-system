<?php
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: dashboard.php");
}
?>

<head>
	<title>Administration - GCE A/L Examination 2016</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<center><h1 class="header">Administration - GCE A/L Examination 2016</h1></center>
<center><img src="images/header.png" class="imageStudent"></center>

<center>
<div id=1 class="login_form" >
<center><h2 class="h2">Login to Dashboard</h2></center>

<form method="post">
<table class="login_table">

    <tr>
        <th>Username</th>
        <th><input class="username_box" type="text" name=username placeholder="username" required> </th>
    </tr>
    <tr>
        <th>Password</th>
        <th><input class="password_box" type="password" name=password placeholder="********" required></th>
    </tr>
    <tr>
        <th></th>
        <th></th>
    </tr>

</table>
    <input class="login_button" type="submit" name="login"  value="Login">
    </form>
</div>
</center>

</body>