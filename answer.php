 <?php
require("connect.php");
?>
<?php
$patient_id = $_POST['i'];
$patientname = $_POST['n'];

if(isset($_POST['submit']))
{
  if(!$_POST['i']|| !$_POST['n'])
  {
    echo "You did not fill all the required data";
    include('answer.html');
    die();
  }
 $stud = mysql_query("SELECT * FROM drreply ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=1 height=200>";
echo "<tr>
<td><B><h3>answers    </h3></B></td>
</tr>";
	while($row = mysql_fetch_array ($stud))
  {
  	echo "<tr>";
echo "<td>".$row['answers']."</td>";
echo "</tr></table";  
}
}
else{
  echo "No answers is found in this class";
}}
?>
<html>     
<head>     
<title>see reply from doctor</title>    
</head>     
<BODY bottomMargin=0 leftMargin=90 rightMargin=90  topMargin=5>
<a href="answer.html"><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>
</BODY>
</html>