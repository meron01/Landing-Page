<?php

 include('header1.php');  
							
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
$eventname= $_POST['news_title'];
$description= $_POST['desc'];
$startdate= $_POST['start_date'];
$enddate= $_POST['end_date'];

mysql_query("INSERT INTO postnews
VALUES ( '$eventname', '$description' ,'$startdate', '$enddate', '$location')")or die(mysql_error());
echo "<script>window.location='adminhomepage.php';</script>";                                  

}

}
}
?>								

