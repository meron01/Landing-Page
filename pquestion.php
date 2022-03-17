<?php
require("connect.php");
?>
<?php
$p = $_POST['patient_id'];
$n = $_POST['patientname'];
if(isset($_POST['submit']))
{
	if(!$_POST['patient_id']||!$_POST['patientname']||!$_POST['question'])
	{
		include('pquestion.html');
		die('You did not fill all data');

	}
$id = mysql_query("SELECT * from registerr where patient_id = '$p' and patientname = '$n'");
$id_row = mysql_num_rows($id);
if($id_row==0)
{
	 echo"<h1 style=color:red align=center>such patient are not registered please try another!!</h1>";
include('pquestion.html');

}
else{
$insert="INSERT INTO pquestion(patient_id,patientname,question)
		VALUES ('".$_POST['patient_id']."','".$_POST['patientname']."','".$_POST['question']."')";
mysql_query($insert);
echo "<h1 style=color:blue align=center>your question has been sent Successfully </h1> ";
include('patienthomepage.php');
}
}
?>





