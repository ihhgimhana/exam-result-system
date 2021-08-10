<?php
use Phppot\DataSource;
session_start();
error_reporting(0);
include('database.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:admin.php');
}
else{


require_once 'DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();

if (isset($_POST["import"])) {
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            
            $indexNumber = "";
            if (isset($column[0])) {
                $indexNumber = mysqli_real_escape_string($conn, $column[0]);
            }
            $year = "";
            if (isset($column[1])) {
                $year = mysqli_real_escape_string($conn, $column[1]);
            }
            $name = "";
            if (isset($column[2])) {
                $name = mysqli_real_escape_string($conn, $column[2]);
            }
            $district = "";
            if (isset($column[3])) {
                $district = mysqli_real_escape_string($conn, $column[3]);
            }
            $island = "";
            if (isset($column[4])) {
                $island = mysqli_real_escape_string($conn, $column[4]);
            }
            $zscore = "";
            if (isset($column[5])) {
                $zscore = mysqli_real_escape_string($conn, $column[5]);
            }
            $stream = "";
            if (isset($column[6])) {
                $stream = mysqli_real_escape_string($conn, $column[6]);
            }
            $sub1Name = "";
            if (isset($column[7])) {
                $sub1Name = mysqli_real_escape_string($conn, $column[7]);
            }
            $sub2Name = "";
            if (isset($column[8])) {
                $sub2Name = mysqli_real_escape_string($conn, $column[8]);
            }
            $sub3Name = "";
            if (isset($column[9])) {
                $sub3Name = mysqli_real_escape_string($conn, $column[9]);
            }
            $sub1Marks = "";
            if (isset($column[10])) {
                $sub1Marks = mysqli_real_escape_string($conn, $column[10]);
            }
            $sub2Marks = "";
            if (isset($column[11])) {
                $sub2Marks = mysqli_real_escape_string($conn, $column[11]);
            }
            $sub3Marks = "";
            if (isset($column[12])) {
                $sub3Marks = mysqli_real_escape_string($conn, $column[12]);
            }
            $commonMarks = "";
            if (isset($column[13])) {
                $commonMarks = mysqli_real_escape_string($conn, $column[13]);
            }
            $englishMarks = "";
            if (isset($column[14])) {
                $englishMarks = mysqli_real_escape_string($conn, $column[14]);
            }
            
            $sqlInsert = "INSERT into results (indexNumber,year,name,district,island,zscore,stream,sub1Name,sub2Name,sub3Name,sub1Marks,sub2Marks,sub3Marks,commonMarks,englishMarks)
                   values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                   $paramType = "iisiidsssssssis";
            		$paramArray = array(
                		$indexNumber,
						$year,
						$name,
						$district,
						$island,
						$zscore,
						$stream,
						$sub1Name,
						$sub2Name,
						$sub3Name,
						$sub1Marks,
						$sub2Marks,
						$sub3Marks,
						$commonMarks,
						$englishMarks
            		);
            
            $insertId = $db->insert($sqlInsert, $paramType, $paramArray);
            
            if (! empty($insertId)) {
                $message = "CSV Data Imported into the Database";
            } else {
                $error = "Please Check the Database via phpmyadmin. Table name is Results";
            }
        }
    }
}
?>

<head>
<script src="jquery-3.2.1.min.js"></script>
<title>Add Results - GCE A/L Examination</title>
<script type="text/javascript">
$(document).ready(function() {
    $("#csv").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<center><h1 class="header">Add Results - GCE A/L Examination</h1></center>
<center><img src="images/header.png" class="imageStudent"></center>

<center><h3 class="dashboard_h3">Add Results to Database</h3></center>
<br>

<center><form class="formCSV" action="" method="post"
                name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                
                    <h3 class="dashboard_h3">Select CSV File</h3> <input type="file" name="file" id="file" accept=".csv">
                    <button type="submit" id="submit" name="import"
                        class="logout_button">Import</button>
                    <br/>

</form></center>

<center><div>
        <?php
        echo "<center><h3 class='h3'>$message</h3></center>";
        echo "<center><h3 class='h3'>$error</h3></center>";
        ?>
</div></center>

<center><a href="dashboard.php"><input class="logout_button" type="submit" name="submit"  value="Back to Dashboard"></a></center>

<?php } ?>