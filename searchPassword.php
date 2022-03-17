
<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

?>
<?php
require("connect.php");
?>
<?php
$id = $_POST['id'];
$patient_id = $_POST['patient_id'];
$firstname = $_POST['firstname'];
if(isset($_POST['submit']))
{
$result = mysql_query("SELECT * FROM createaccount WHERE id = '$id' AND firstname='$firstname'");
$id_row = mysql_num_rows($result);
if($id_row!=0)
	{
	while($row = mysql_fetch_array($result))
		{
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "Your password is:";
echo "</td>";
echo "<td>".$row['password']."</td>";
echo"</tr>";
	echo("Do not forget for next time!");
	echo("</table>");
include("home.php");	
	die();
	}
	}
else{
		$result = mysql_query("SELECT * FROM registerrr WHERE patient_id = '$patient_id' AND firstname='$firstname'");
	$id_row = mysql_num_rows($result);
	if($id_row!=0)
	{
	while($row = mysql_fetch_array($result))
		{
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "Your password is:";
echo "</td>";
echo "<td>".$row['password']."</td>";
echo"</tr>";
	echo("Do not forget for next time!");
	echo("</table>");
include("home.php");	
die();
	}
	}}
echo "This user name is not found";
		include("home.php");

}
?>







