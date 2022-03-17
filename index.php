
<!DOCTYPE html>
<html>
<head>
	<title>chat box</title>
</head>


            
<BODY bottomMargin=0 aLink=#f0f0f0 leftMargin=90 rightMargin=90 link=#f0f0f0  topMargin=5 bgColor=#98afc7 vLink=#f0f0f0 >  


<TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#98afc7>
<TR> 
<TD vAlign=top align=middle>            
<TABLE bgcolor=#f0f0f0 border=0 cellSpacing=0 cellPadding=0 width=140 align=center>               
<TR>           
<TD height=100 width="40%"><IMG border=0 alt="" src="images/bbbbb.jpg" width=250 height=110>&nbsp;</TD>   
<TD height=100 width="20%"><IMG border=0 alt=""  src="images/t.jpg" width=250  height=110></TD> 
<TD height=100 width="40%"><IMG border=0 alt="" src="images/aaa.jpg" width=250 height=110>&nbsp;</TD>
<TD height=100 width="40%"><IMG border=0 alt="" src="images/aa.jpg" width=250 height=110>&nbsp;</TD
</TR>
</TABLE> 


<form action="" method="post">
	<label>Name:<br><input type="text" name="name"><br></label>
	<label>Messages:<br><textarea cols="45" rows="5" name="mes"></textarea></label><br>
<input type="submit" name="post" value="post">
</form>
</body>
</html>
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

















