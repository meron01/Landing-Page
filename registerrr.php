<?php
require("connect.php");
?>
<?php
$p = $_POST['patient_id'];
if(isset($_POST['submit']))
{
	//if(!$_POST['Patient_Id']||!$_POST['firstname']||!$_POST['middlename']||!$_POST['lastname']||! $_POST['nationality']||!$_POST['gender']||!$_POST['age']||!$_POST['zone']||! $_POST['woreda']||!$_POST['kebele']||!$_POST['phonenumber']||!$_POST['status']||!$_POST['role']||!$_POST['occupation']||!$_POST['year'])
	//{
	//	include('register.html');
		//die('You did not fill all data');

	//}
$id = mysql_query("SELECT * from registerr where patient_id = '$p'");
$id_row = mysql_num_rows($id);
if($id_row!=0)
{
	echo("this patient has already registered try another!!!");
include('registerrr.html');

}
else{
	$password=$_POST['password'];
	$pass=md5($password);
$insert="INSERT INTO registerr(patient_id,firstname,middlename,patientname,password,nationality,gender,age,zone,woreda,kebele,phonenumber,status,role,occupation,year)
		VALUES ('".$_POST['patient_id']."','".$_POST['firstname']."','".$_POST['middlename']."','".$_POST['patientname']."','$pass','".$_POST['nationality']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['zone']."','".$_POST['woreda']."','".$_POST['kebele']."','".$_POST['phonenumber']."','".$_POST['status']."','".$_POST['role']."','".$_POST['occupation']."','".$_POST['year']."')";
mysql_query($insert);
echo "registered Successfully  ";

include('patienthomepage.php');
}
}
?>





