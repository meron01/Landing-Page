<?php
require("connect.php");
?>
<?php
$ph = $_POST['stockcode'];
if(isset($_POST['submit']))
{
	if(!$_POST['stockcode']||!$_POST['itemname']||! $_POST['unit']||!$_POST['quantity']||!$_POST['unitprice']||!$_POST['totalsellingprice']||!$_POST['manufacturer']||!$_POST['batchnumber']||!$_POST['expdate'])
	{
		include('adddrug.html');
		die('You did not fill all data');

	}
$id = mysql_query("SELECT * from adddrug where stockcode = '$ph'");
$id_row = mysql_num_rows($id);
if($id_row!=0)
{
	echo("The stockcode already exist on the DB");
include('adddrug.html');

}
else{
$insert="INSERT INTO adddrug(stockcode,itemname,unit,quantity,unitprice,totalsellingprice,manufacturer,batchnumber,expdate)
		VALUES ('".$_POST['stockcode']."','".$_POST['itemname']."','".$_POST['unit']."','".$_POST['quantity']."','".$_POST['unitprice']."','".$_POST['totalsellingprice']."','".$_POST['manufacturer']."','".$_POST['batchnumber']."','".$_POST['expdate']."')";
mysql_query($insert);
echo "Drug registered Successfully  ";
include('pharmacisthomepage.php');
}
}
?>