<?php
require("connect.php");
?>
<?php
$ph = $_POST['id'];
$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$lname = $_POST['patientname'];
$pas = $_POST['password'];
$nat = $_POST['nationality'];
$sex = $_POST['gender'];
$age = $_POST['age'];
$zo = $_POST['zone'];
$wo = $_POST['woreda'];
$keb = $_POST['kebele'];
$phonenumber = $_POST['phonenumber'];
$status = $_POST['status'];
$role = $_POST['role'];
$occupation = $_POST['occupation'];
$year = $_POST['year'];
if(isset($_POST['submit']))
{
	
$id = mysql_query("SELECT * from createaccount where id = '$ph'");
$id_row = mysql_num_rows($id);
if($id_row!=0)
{
	echo("The id already exist on the DB");
include('createaccoun.php');
die();
}
else{
$insert="INSERT INTO createaccount(id,firstname,middlename,patientname,password,nationality,gender,age,zone,woreda,kebele,phonenumber,status,role,occupation,year)
		VALUES ('".$_POST['id']."','".$_POST['firstname']."','".$_POST['middlename']."','".$_POST['patientname']."','".$_POST['password']."','".$_POST['nationality']."','".$_POST['gender']."'
			,'".$_POST['age']."','".$_POST['zone']."','".$_POST['woreda']."','".$_POST['kebele']."','".$_POST['phonenumber']."','".$_POST['status']."','".$_POST['occupation']."','".$_POST['year']."')";
mysql_query($insert);
echo "account created Successfully  ";
include('adminhomepage.php');
}
}
?>