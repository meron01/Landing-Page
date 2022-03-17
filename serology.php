<?php
require("connect.php");
?>
<?php
$ph = $_POST['patient_id'];
//if(isset($_POST['submit']))
//{
	//if(!$_POST['patient_id']||!$_POST['patientname']||!$_POST['patientaddress']||!$_POST['age']||! $_POST['sex']||!$_POST['hospitalnumber']||!$_POST['dateofcollection']||!$_POST['VDRL']||!$_POST['widal']||!$_POST['weil-flex']||!$_POST['ASO']||!$_POST['romatoiedfactor']||!$_POST['CRP']||!$_POST['antihcvantibody']||!$_POST['TPHA'])
	//{
		//include('serology.html');
		//die('please fill all the required data!!');

	//}
$id = mysql_query("SELECT * from serology where patient_id = '$ph'");
$id_row = mysql_num_rows($id);
if($id_row!=0)
{
	echo("The patient id already exist on the DB");
include('serology.html');

}
else{
$insert="INSERT INTO serology(patient_id,patientname,patientaddress,age,sex,hospitalnumber,dateofcollection,VDRL,widal,weil-flex,ASO,romatoiedfactor,CRP,antihcvantibody,TPHA)
		VALUES ('".$_POST['patient_id']."','".$_POST['patientname']."','".$_POST['patientaddress']."','".$_POST['age']."','".$_POST['sex']."','".$_POST['hospitalnumber']."','".$_POST['dateofcollection']."','".$_POST['VDRL']."','".$_POST['widal']."','".$_POST['weil-flex']."','".$_POST['ASO']."','".$_POST['romatoiedfactor']."','".$_POST['CRP']."','".$_POST['antihcvantibody']."','".$_POST['TPHA']."')";
mysql_query($insert);
//echo "serology lab orderd Successfully  ";
include('serology.html');
echo "serology lab orderd Successfully  ";
//}
}
?>





