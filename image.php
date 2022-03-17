<?php
//$connect=mysql_connect("localhost","root","");
if(isset($_POST["insert"])){
	$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$query="INSERT INTO tbl_images(name) VALUES('$file')";
	if(mysql_query($connect,$query))
	{
		echo "image inserted!";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>upload news</title>
</head>
<body>
<div class="container" style="width: 500px">
	<h3 align="center">upload nws to user</h3><br>
	<form method="post" enctype="multipart/form-data"></form>
	<input type="file" name="image" id="image"><br>
	<input type="submit" name="insert" id="insert" value="Insert" class="btn">
	</form><br>
	<table class="table table-bordered">
		<tr><th>image</th></tr>

		//<?php
        //$query="SELECT * FROM tbl_images ORDER BY id DESC";
        //$result=mysql_query($connect,$query);
        //while ($row=mysql_fetch_array($result)) {
        //	echo '<tr><td>
        //	<img src="data:image/jepg;base64,'.base64_encode($row['name']).'"/>
        //	</td></tr>
        //}

		//?>
	</table>
</div>
</body>
</html>
<script >
	
	$(document).ready(function(){
		$('#insert').click(function(){
			var image_name=$('#image').val();
if(image_name==''){
	alert("please select image");
	return false;
}
else{
	var extension=$('#image').val().split('.').pop().toLowerCase();
	if(jQuery.inArray(extension,['gif','png','jpg',''])==-1)
	{
		alert("invalid image format");
		$('#image').val('');
		return false;
	}
}
		});
});
</script>














