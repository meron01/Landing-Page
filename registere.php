<?php
require("connect.php");
?>
<?php
$m = $_POST['mobile'];
if(isset($_POST['submit']))
{
	if(!$_POST['username']||!$_POST['password']||!$_POST['first_name']||! $_POST['last_name']||!$_POST['age']||!$_POST['gender']||!$_POST['occupation']||!$_POST['mobile']||!$_POST['address']||!$_POST['role'])
	{
		include('register.html');
		die('You did not fill all data');

	}
$id = mysql_query("SELECT * from registere where mobile = '$m'");
$id_row = mysql_num_rows($id);
if($id_row!=0)
{
	echo("userexist on the DB try another!!!");
include('registere.html');

}
else{
$insert="INSERT INTO registere(username,password,first_name,last_name,age,gender,occupation,mobile,address,role)
		VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['occupation']."','".$_POST['mobile']."','".$_POST['address']."','".$_POST['role']."')";
mysql_query($insert);
echo "registered Successfully  ";
include('registere.html');
}
}
?>





