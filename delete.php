<?php
session_start();
error_reporting(0);
//include("connection.php");



?>

<html>
<body>
<?php
include('connect.php');
if(isset($_GET['patient_id']))
{
$id=$_GET['patient_id'];
$query1=mysql_query("delete from clinicalchemistry where patient_id='$patient_id'");
if($query1)
{
header('location:viewclinicalchemistry.php');
}
}
?>
</body>
</html>
