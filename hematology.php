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
		include('hematology.html');
		die('please fill all the required data!!');

	}
$id = mysql_query("SELECT * from registerr where patient_id = '$patient_id' and patientname = '$patientname'");
$id_row = mysql_num_rows($id);
if($id_row==0){

	echo"<h1 style=color:red align=center>such patient are not allowed to this service!!!!</h1>";
include('hematology.html');

}
else{
$insert="INSERT INTO hematology(patient_id,patientname,patientaddress,age,sex,clinicaldata,hospitalnumber,dateofcollection,bands,lymphocytes,basophils,hematocrit,bloodparasite,segments,monocytes,rbc,hemoglobin,bleedingtime)
		VALUES ('".$_POST['patient_id']."','".$_POST['patientname']."','".$_POST['patientaddress']."','".$_POST['age']."','".$_POST['sex']."','".$_POST['clinicaldata']."','".$_POST['hospitalnumber']."','".$_POST['dateofcollection']."','".$_POST['bands']."','".$_POST['lymphocytes']."','".$_POST['basophils']."','".$_POST['hematocrit']."','".$_POST['bloodparasite']."','".$_POST['segments']."','".$_POST['monocytes']."','".$_POST['rbc']."','".$_POST['hemoglobin']."','".$_POST['bleedingtime']."')";
mysql_query($insert);
echo "<h1 style=color:blue align=center>your hematology lab has beeb orderd Successfully </h1> ";
include('doctorhomepage.php');
}
}
?>





