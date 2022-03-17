<html>
<body style ="background-color: #6897bb;">
<?php
include('connect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from createaccount where id='$id'");
if($query1)
{
include ('deleteaccount.php');
}
}
?>
</body>
</html>