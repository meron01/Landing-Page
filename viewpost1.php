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

<?php
$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"];
if($post){
	$write = fopen("com.txt", "a+");
	fwrite($write, "<u><b> $name</b></u><br>$text<br>");
	fclose($write);
	$read = fopen("com.txt", "r+t");
	echo "all comments: <br>" ;
	while (!feof($read)) {

		echo fread($read, 1024);
	}
	fclose($read);
}
else{
$read = fopen("com.txt", "r+t");
echo "all comments:<br>";
while (!feof($read)) {
echo fread($read, 1024);
}
fclose($read);
}

?>



</body>
</html>


