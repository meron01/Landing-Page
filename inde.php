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

<form method="post" action="inde.php" enctype="multipart/form-data">
<input type="hidden"  name="size" value="1000000">
<div>
  <input type="file" name="image">

</div>
<div>
  <textarea name="text" cols="40" placeholder="real madrid"></textarea>
</div>

 <input type="submit" name="upload" value="upload image">
</div>
 </form>
 </div>
</body>
</html>


<a href="adminhomepage.php">BACK</a>