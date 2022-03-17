<?php
require("connect.php");
?>
<?php
$msg="";
if(isset($_POST['upload'])){

	$target="images/".basename($_FILES['image']['name']);
	//$db=mysql_connect("localhost","root","","login");
	$image=$_FILES['image']['name'];
	$text=$_POST['text'];
	$sql="INSERT INTO images(image,text) VALUES('$image','$text')";
	mysql_query($sql);
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		$msg="success";
	}else{
		$msg="fail";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>image uploads</title>
	<link rel="stylesheet" type="text/css" href="stylepost.css">
</head>
<body style="background-color: powderblue;">
<div id="content">
<?php
$sql="SELECT * FROM images";
$result=mysql_query($sql);
while ($row=mysql_fetch_array($result)) {
	echo "<div id='img_div'>";
	echo "<img src='images/".$row['image']."'>";
	echo "<p>".$row['text']."</p>";
	echo "</div>";
}


?>


 </div>
</body>
</html>


<a href="patienthomepage.php">BACK</a>