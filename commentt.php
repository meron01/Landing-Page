<form action="" method="post">
	<label>Name:<br><input type="text" name="name"><br></label>
	<label>your comments:<br><textarea cols="45" rows="5" name="mes"></textarea></label><br>
<input type="submit" name="post" value="post">
</form>

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


