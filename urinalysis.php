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
		include('urinalysis.html');
		die('please fill all the required data!!');

	}
$id = mysql_query("SELECT * from registerr where patient_id = '$patient_id' and patientname = '$patientname'");
$id_row = mysql_num_rows($id);
if($id_row==0){
echo"<h1 style=color:red align=center>such patient are not allowed to this service!!!!</h1>";
include('urinalysis.html');

}
else{
$insert="INSERT INTO urinalysis(patient_id,patientname,patientaddress,age,sex,clinicaldata,hospitalnumber,dateofcollection,color,ph,gravity,albumin,glucose,ketone,bilirubin,blood,urobilinogen,nitrite,urinehcg,rbc,wbc,epithelialcell,castrbc,castwbc,granularcast,crystals,bacteria)
		VALUES ('".$_POST['patient_id']."','".$_POST['patientname']."','".$_POST['patientaddress']."','".$_POST['age']."','".$_POST['sex']."','".$_POST['clinicaldata']."','".$_POST['hospitalnumber']."','".$_POST['dateofcollection']."','".$_POST['color']."','".$_POST['ph']."','".$_POST['gravity']."','".$_POST['albumin']."','".$_POST['glucose']."','".$_POST['ketone']."','".$_POST['bilirubin']."','".$_POST['blood']."','".$_POST['urobilinogen']."','".$_POST['nitrite']."','".$_POST['urinehcg']."','".$_POST['rbc']."','".$_POST['wbc']."','".$_POST['epithelialcell']."','".$_POST['castrbc']."','".$_POST['castwbc']."','".$_POST['granularcast']."','".$_POST['crystals']."','".$_POST['bacteria']."')";
mysql_query($insert);
echo "<h1 style=color:blue align=center>your urinalysis lab has beeb orderd Successfully </h1> ";
include('doctorhomepage.php');
}
}
?>











