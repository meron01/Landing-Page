<?php
include('connect.php');
?>
<?php
session_start();
if(isset($_POST['bttlogin'])){
	//include'connect.php';
	$firstname=$_POST['firstname'];
	$password=$_POST['password'];


//if($firstname&& $password )
//{
$result=mysql_query('SELECT * FROM createaccount WHERE firstname="'.$firstname.'" and password="'.$password.'"');
if(mysql_num_rows($result)!=0)
//if($numrows!=0)
{
		$_SESSION['firstname'] = $firstname;
	
	header('Location: welcome.php');
}
else{
echo "incorrect user name and paasord!";
}
if (isset($_GET['Logout'])) {
	session_unregister('firstname');
	# code...
}}
?>


<html>
<form method="post" action="">
	<table cellpadding="2" cellspacing="2" border="1"> 
	<tr>
		<td>user name</td>
		<td ><input type="text" name="firstname"></td>
	</tr>
	<tr>
		<td>password</td>
		<td ><input type="text" name="password"></td>
	</tr>


<tr>
		<td>&nbsp</td>
		<td ><input type="submit" name="bttlogin" value="login"></td>
	</tr>
	</table>
</form></html>