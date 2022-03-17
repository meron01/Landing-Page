<html>
<body>
<?php
include('connect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from images where id='$id'");
if($query1)
{
include ('deletesearch.php');
}
}
?>
</body>
</html>
