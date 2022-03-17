 <?php
require("connect.php");
?>
<?php
//$occupation = $_POST['o'];
//$mobile = $_POST['m'];

//if(isset($_POST['submit']))
//{
  //if(!$_POST['o']|| !$_POST['m'])
 // {
   // echo "You did not fill all the required data";
   // include('register.html');
   // die();
  //}
 $stud = mysql_query("SELECT * FROM news ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=2 height=200>";
echo "<tr>
<td><B><h3>title</h3></B></td>
<td><B><h3> news   </h3></B></td>

</tr>";
	while($row = mysql_fetch_array ($stud))
  {
  	echo "<tr>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['news']."</td>";
echo "</tr></table";  
}
}
?>
<html>     
<head>     
<title>view posted news</title>    
</head>     
<BODY bottomMargin=0 leftMargin=90 rightMargin=90  topMargin=5>
<a href="postnews.html"><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>
</BODY>
</html>







