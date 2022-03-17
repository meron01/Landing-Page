<body style ="background-color: #6897bb;">
 <?php
require("connect.php");
?>
<?php
$patient_id = $_POST['i'];
//$mobile = $_POST['m'];

if(isset($_POST['submit']))
{
  if(!$_POST['i'])
  {
    echo "You did not fill all the required data";
    include('viewqanswer.html');
    die();
  }
 $stud = mysql_query("SELECT * FROM pquestion where patient_id='$patient_id' ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=1 height=100>";
echo "<tr>
<td><B><h3>Patient_ID</h3></B></td>
<td><B><h3> patient name   </h3></B></td>
<td><B><h3> your questions    </h3></B></td>
<td><B><h3> your answers    </h3></B></td>
</tr>";
	while($row = mysql_fetch_array ($stud))
  {
  	echo "<tr>";
echo "<td>".$row['patient_id']."</td>";
echo "<td>".$row['patientname']."</td>";
echo"<td>".$row['question']."</td>";
echo"<td>".$row['ansewers']."</td>";
echo "</tr></table";  
}
}
else{
  echo "No patsient id is found in this class";
  
}}
?>
<html>     
<head>     
<title>answered question View page</title>    
</head>     
<BODY bottomMargin=0 leftMargin=90 rightMargin=90  topMargin=5>
<a href="patienthomepage.php"><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>
</BODY>
</html>





