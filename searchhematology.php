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
    include('searchhematology.html');
    die();
  }
 $stud = mysql_query("SELECT * FROM hematology where patientname='$patientname' and patient_id='$patient_id' ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=2 height=200>";
echo "<tr>
<td><B><h3>patientname</h3></B></td>
<td><B><h3> patientaddress   </h3></B></td>
<td><B><h3>age    </h3></B></td>
<td><B><h3>sex    </h3></B></td>
<td><B><h3>clinicaldata    </h3></B></td>
<td><B><h3>hospitalnumber  </h3></B></td>
<td><B><h3>dateofcollection  </h3></B></td>
<td><B><h3>bands</h3></B></td>
<td><B><h3> lymphocytes   </h3></B></td>
<td><B><h3>basophils    </h3></B></td>
<td><B><h3>hematocrit    </h3></B></td>
<td><B><h3>bloodparasite    </h3></B></td>
<td><B><h3>segments  </h3></B></td>
<td><B><h3>monocytes  </h3></B></td>
<td><B><h3>rbc</h3></B></td>
<td><B><h3> hemoglobin   </h3></B></td>
<td><B><h3>bleedingtime    </h3></B></td>


</tr>";
  while($row = mysql_fetch_array ($stud))
  {
    echo "<tr>";
//echo "<td>".$row['patient_id']."</td>";
echo "<td>".$row['patientname']."</td>";
echo"<td>".$row['patientaddress']."</td>";
echo"<td>".$row['age']."</td>";
echo"<td>".$row['sex']."</td>";
echo"<td>".$row['clinicaldata']."</td>";
echo"<td>".$row['hospitalnumber']."</td>";
echo "<td>".$row['dateofcollection']."</td>";
echo "<td>".$row['bands']."</td>";
echo"<td>".$row['lymphocytes']."</td>";
echo"<td>".$row['basophils']."</td>";
echo"<td>".$row['hematocrit']."</td>";
echo"<td>".$row['bloodparasite']."</td>";
echo"<td>".$row['segments']."</td>";
echo"<td>".$row['monocytes']."</td>";
echo "<td>".$row['rbc']."</td>";
echo"<td>".$row['hemoglobin']."</td>";
echo"<td>".$row['bleedingtime']."</td>";
 ?>
    
      
      <?php
echo "</tr></table";  
}
}
else{
  echo "No patient is found in this class";
}}
?>

<a href="searchhematology.html"><br><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>






