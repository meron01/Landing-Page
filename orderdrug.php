<?php
require("connect.php");
?>
<?php
$p = $_POST['patient_id'];
$n = $_POST['patientname'];
if(isset($_POST['submit']))
{
	if(!$_POST['patient_id']||!$_POST['patientname']||!$_POST['drugname']||!$_POST['quantity'])
	{
		include('orderdrugg.php');
		die('You did not fill all data');

	}
$id = mysql_query("SELECT * from registerr where patient_id = '$p' and patientname = '$n'");
$id_row = mysql_num_rows($id);
if($id_row==0)
{
	 echo"<h1 style=color:red align=center>such patient are not legal!!</h1>";
include('orderdrugg.php');

}
else{
$insert="INSERT INTO orderdrug(patient_id,patientname,drugname,quantity)
		VALUES ('".$_POST['patient_id']."','".$_POST['patientname']."','".$_POST['drugname']."','".$_POST['quantity']."')";
mysql_query($insert);
echo "<h1 style=color:blue align=center>drug ordered successfully!! </h1> ";
include('doctorhomepage.php');
//include('pharmacisthomepage.php');

}
}
?>





