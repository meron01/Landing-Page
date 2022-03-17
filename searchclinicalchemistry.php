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
    include('searchclinicalchemistry.html');
    die();
  }
 $stud = mysql_query("SELECT * FROM clinicalchemistry where patientname='$patientname' and patient_id='$patient_id' ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=2 height=200>";
echo "<tr>
<td><B><h3>patient ID</h3></B></td>
<td><B><h3>patientname</h3></B></td>
<td><B><h3> patientaddress   </h3></B></td>
<td><B><h3>age    </h3></B></td>
<td><B><h3>sex    </h3></B></td>
<td><B><h3>clinicaldata    </h3></B></td>
<td><B><h3>hospitalnumber  </h3></B></td>
<td><B><h3>dateofcollection  </h3></B></td>
<td><B><h3>glufasting</h3></B></td>
<td><B><h3> bun   </h3></B></td>
<td><B><h3>glurandom    </h3></B></td>
<td><B><h3>totalprotein    </h3></B></td>
<td><B><h3>albumin    </h3></B></td>
<td><B><h3>ldh  </h3></B></td>
<td><B><h3>alpha1globulin  </h3></B></td>
<td><B><h3>alpha2globulin</h3></B></td>
<td><B><h3> betaglobulin   </h3></B></td>
<td><B><h3>gama    </h3></B></td>
<td><B><h3>Lab number    </h3></B></td>

</tr>";
  while($row = mysql_fetch_array ($stud))
  {
    echo "<tr>";
echo "<td>".$row['patient_id']."</td>";
echo "<td>".$row['patientname']."</td>";
echo"<td>".$row['patientaddress']."</td>";
echo"<td>".$row['age']."</td>";
echo"<td>".$row['sex']."</td>";
echo"<td>".$row['clinicaldata']."</td>";
echo"<td>".$row['hospitalnumber']."</td>";
echo "<td>".$row['dateofcollection']."</td>";
echo "<td>".$row['glufasting']."</td>";
echo"<td>".$row['bun']."</td>";
echo"<td>".$row['glurandom']."</td>";
echo"<td>".$row['totalprotein']."</td>";
echo"<td>".$row['albumin']."</td>";
echo"<td>".$row['ldh']."</td>";
echo"<td>".$row['alpha1globulin']."</td>";
echo "<td>".$row['alpha2globulin']."</td>";
echo"<td>".$row['betaglobulin']."</td>";
echo"<td>".$row['gama']."</td>";
echo"<td>".$row['labid']."</td>";
 ?>
    
      
      <?php
echo "</tr></table";  
}
}
else{
  echo "No patient is found in this class";
}}
?>

<a href="clinicalchemistry.html"><br><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>






