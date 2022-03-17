<?php
require("connect.php");
?>
<?php
$p = $_POST['id'];
if(isset($_POST['submit']))
{
	//if(!$_POST['Patient_Id']||!$_POST['firstname']||!$_POST['middlename']||!$_POST['lastname']||! $_POST['nationality']||!$_POST['gender']||!$_POST['age']||!$_POST['zone']||! $_POST['woreda']||!$_POST['kebele']||!$_POST['phonenumber']||!$_POST['status']||!$_POST['role']||!$_POST['occupation']||!$_POST['year'])
	//{
	//	include('register.html');
		//die('You did not fill all data');

	//}
$id = mysql_query("SELECT * from createaccount where id = '$p'");
$id_row = mysql_num_rows($id);
if($id_row!=0)
{
	echo("already registered try another!!!");
include('createaccoun.php');

}
else{
	//$password=$_POST['password'];
	//$pass=md5($password);
$insert="INSERT INTO createaccount(id,firstname,middlename,patientname,password,nationality,gender,age,zone,woreda,kebele,phonenumber,status,role,occupation,year)
		VALUES ('".$_POST['id']."','".$_POST['firstname']."','".$_POST['middlename']."','".$_POST['patientname']."',".$_POST['password']."','".$_POST['nationality']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['zone']."','".$_POST['woreda']."','".$_POST['kebele']."','".$_POST['phonenumber']."','".$_POST['status']."','".$_POST['role']."','".$_POST['occupation']."','".$_POST['year']."')";
mysql_query($insert);
echo "account created Successfully  ";

include('adminhomepage.php');
}
}
?>





