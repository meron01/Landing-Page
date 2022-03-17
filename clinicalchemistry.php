<?php
require("connect.php");
?>
<?php
$patient_id = $_POST['patient_id'];
$patientname = $_POST['patientname'];
if(isset($_POST['submit']))
{
	if(!$_POST['patient_id']||!$_POST['patientname']||!$_POST['patientaddress']||!$_POST['age']||! $_POST['sex']||!$_POST['clinicaldata']||!$_POST['hospitalnumber']||!$_POST['dateofcollection'])
	{
		include('clinicalchemistry.html');
		die('please fill all the required data!!');

	}
$id = mysql_query("SELECT * from registerr where patient_id = '$patient_id' and patientname = '$patientname'");
$id_row = mysql_num_rows($id);
if($id_row==0){


	echo"<h1 style=color:red align=center>such patient are not allowed to this service!!!!</h1>";
include('clinicalchemistry.html');

}
else{
$insert="INSERT INTO clinicalchemistry(patient_id,patientname,patientaddress,age,sex,clinicaldata,hospitalnumber,dateofcollection,glufasting,bun,glurandom,totalprotein,albumin,ldh,alpha1globulin,alpha2globulin,betaglobulin,gama)
		VALUES ('".$_POST['patient_id']."','".$_POST['patientname']."','".$_POST['patientaddress']."','".$_POST['age']."','".$_POST['sex']."','".$_POST['clinicaldata']."','".$_POST['hospitalnumber']."','".$_POST['dateofcollection']."','".$_POST['glufasting']."','".$_POST['bun']."','".$_POST['glurandom']."','".$_POST['totalprotein']."','".$_POST['albumin']."','".$_POST['ldh']."','".$_POST['alpha1globulin']."','".$_POST['alpha2globulin']."','".$_POST['betaglobulin']."','".$_POST['gama']."')";
mysql_query($insert);
echo "<h1 style=color:blue align=center>your clinicalchemistry lab has beeb orderd Successfully </h1> ";
include('doctorhomepage.php');
}
}
?>


