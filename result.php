<html>
<head>
	<title>GCE A/L Examination 2016</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<center><h1 class="header">Results - GCE A/L Examination - 2016 </h1></center>

<?php

if (isset($_POST['submit'])) {
$indexNumber = $_POST['inputIndex'];

$host = "localhost";
$user = "root";
$pass = "";
$database = "exam";

$conn = mysqli_connect($host , $user , $pass, $database);
$query = "SELECT * from results where indexNumber='$indexNumber'";

if ($result = $conn->query($query)){
    while ($row = $result->fetch_assoc()) {
        $field1 = $row["year"];
        $field2 = $row["name"];
        $field3 = $row["indexNumber"];
        $field4 = $row["district"];
        $field5 = $row["island"];
        $field6 = $row["zscore"];
        $field7 = $row["stream"];
        $field8 = $row["sub1Name"];
        $field9 = $row["sub2Name"];
        $field10 = $row["sub3Name"];
        $field11 = $row["sub1Marks"];
        $field12 = $row["sub2Marks"];
        $field13 = $row["sub3Marks"];
        $field14 = $row["englishMarks"];
        $field15 = $row["commonMarks"];
	

echo "<center><h3 class='h3'>General Information</h3></center>
<center><div class='div_result1'><table border=0 class='table_result1'>
	<tr>
		<td>Year</td>
		<td>$field1</td>
	</tr>
	<tr>
		<td>Name</td>
		<td>$field2</td>
	</tr>
	<tr>
		<td>Index Number</td>
		<td>$field3</td>
	</tr>
	<tr>
		<td>District Rank</td>
		<td>$field4</td>
	</tr>
	<tr>
		<td>Island Rank</td>
		<td>$field5</td>
	</tr>
	<tr>
		<td>Z-Score</td>
		<td>$field6</td>
	</tr>
	<tr>
		<td>Subject Stream</td>
		<td>$field7</td>
	</tr>
</table></div></center>
<br><br>
<center><h3 class='h3'>Results</h3></center>
<center><div class='div_result2'><table border=1 class='table_result2'>
	<tr>
		<td>Subject</td>
		<td>Result</td>
	</tr>
	<tr>
		<td>$field8</td>
		<td>$field11</td>
	</tr>
	<tr>
		<td>$field9</td>
		<td>$field12</td>
	</tr>
	<tr>
		<td>$field10</td>
		<td>$field13</td>
	</tr>
	<tr>
		<td>GENERAL ENGLISH</td>
		<td>$field14</td>
	</tr>
	<tr>
		<td>COMMON GENERAL TEST</td>
		<td>$field15</td>
	</tr>
</table></div></center>
<br>
<a href='index.php'><center><input class='logout_button' type='submit' name='submit'  value='Check Another Result'></center></a>";
	}

}

}

?>


