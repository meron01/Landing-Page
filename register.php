<?php
require("connect.php");
?>
<?php
$p = $_POST['Patient_Id'];
if(isset($_POST['submit']))
{
	if(!$_POST['Patient_Id']||!$_POST['username']||!$_POST['password']||!$_POST['first_name']||! $_POST['last_name']||!$_POST['age']||!$_POST['gender']||!$_POST['occupation']||!$_POST['mobile']||!$_POST['address']||!$_POST['role'])
	{
		include('register.html');
		die('You did not fill all data');

	}
$id = mysql_query("SELECT * from register where Patient_Id = '$p'");
$id_row = mysql_num_rows($id);
if($id_row!=0)
{
	echo("The Patient_Id already exist on the DB try another!!!");
include('register.html');

}
else{
$insert="INSERT INTO register(Patient_Id,username,password,first_name,last_name,age,gender,occupation,mobile,address,role)
		VALUES ('".$_POST['Patient_Id']."','".$_POST['username']."','".$_POST['password']."','".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['occupation']."','".$_POST['mobile']."','".$_POST['address']."','".$_POST['role']."')";
mysql_query($insert);
echo "registered Successfully  ";

include('patienthomepage.html');
}
}
?>





