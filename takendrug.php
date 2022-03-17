 <body style="background-color: #6897bb;">
 <?php
require("connect.php");
?>
<?php
$patient_id = $_POST['patient_id'];
$patientname = $_POST['patientname'];
if(isset($_POST['submit']))
{
  if(!$_POST['patient_id']|| !$_POST['patientname'])
  {
    echo "You did not fill all the required data";
    include('takendrug.html');
    die();
  }
 $stud = mysql_query("SELECT * FROM orderdrug where patientname='$patientname' and patient_id='$patient_id' ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=2 height=200>";
echo "<tr>
<td><B><h3>patient ID</h3></B></td>
<td><B><h3>patientname</h3></B></td>
<td><B><h3> Druug Name   </h3></B></td>
<td><B><h3>Quantity    </h3></B></td>


</tr>";
  while($row = mysql_fetch_array ($stud))
  {
    echo "<tr>";
echo "<td>".$row['patient_id']."</td>";
echo "<td>".$row['patientname']."</td>";
echo"<td>".$row['drugname']."</td>";
echo"<td>".$row['quantity']."</td>";
 ?>
    
      
      <?php
echo "</tr></table";  
}
}
else{
  echo "No patient is found in this class";
}}
?>

<a href="takendrug.html"><br><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>






