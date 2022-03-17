<?php
require("connect.php");
?>
<?php
$a = $_POST['answers'];
if(isset($_POST['submit']))
{
	if(!$_POST['role']||!$_POST['answers'])
	{
		include('doctorreply.html');
		die('patient must get some response');

	}
$id = mysql_query("SELECT * from drreply where answers = '$a'");
$id_row = mysql_num_rows($id);
if($id_row!=0)
{
	echo("The doctor already exist on the DB try another!!!");
include('doctorreply.html');

}
else{
$insert="INSERT INTO drreply(role,answers)
		VALUES ('".$_POST['role']."','".$_POST['answers']."')";
mysql_query($insert);
echo "your answers has been submitted successfully  ";
include('doctorreply.html');
}
}
?>





