<?php
	
include('connect.php');
   
							
if (!isset($_FILES['image']['tmp_name'])) {
echo "";
}
else{
$file=$_FILES['image']['tmp_name'];
$image = $_FILES["image"] ["name"];
$image_name= addslashes($_FILES['image']['name']);
$size = $_FILES["image"] ["size"];
$error = $_FILES["image"] ["error"];

if ($error > 0){
die("Error uploading file! Code $error.");
}
else{
if($size > 10000000) //conditions for the file
{
die("Format is not allowed or file size is too big!");
}
										
else
{

move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

$name= $_POST['name'];
$date= $_POST['date'];
$dsc= $_POST['description'];
$address= $_POST['address'];
/*$phone_no= $_POST['phoneno'];
$house_no= $_POST['houseno'];
*/
    
mysql_query("insert into post (image,  name, date, description, address) values('$location', '$name', '$date', '$dsc', '$address')")or die(mysql_error());
									
}
echo "<script>window.location='manageuser.php';</script>";
}
}
?>								




