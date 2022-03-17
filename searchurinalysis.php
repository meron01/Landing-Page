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
    include('searchurinalysis.html');
    die();
  }
 $stud = mysql_query("SELECT * FROM urinalysis where patient_id='$patient_id' and patientname='$patientname' ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=2 height=200>";
echo "<tr>
<td><B><h3>patient ID</h3></B></td>
<td><B><h3> patient Name   </h3></B></td>
<td><B><h3>patientaddress    </h3></B></td>
<td><B><h3>age    </h3></B></td>
<td><B><h3>sex    </h3></B></td>
<td><B><h3>clinicaldata  </h3></B></td>
<td><B><h3>hospitalnumber  </h3></B></td>
<td><B><h3>dateofcollection</h3></B></td>
<td><B><h3> color   </h3></B></td>
<td><B><h3>ph    </h3></B></td>
<td><B><h3>gravity    </h3></B></td>
<td><B><h3>albumin    </h3></B></td>
<td><B><h3>glucose  </h3></B></td>
<td><B><h3>ketone  </h3></B></td>
<td><B><h3>bilirubin</h3></B></td>
<td><B><h3> blood   </h3></B></td>
<td><B><h3>urobilinogen    </h3></B></td>
<td><B><h3>nitrite    </h3></B></td>
<td><B><h3>epithelialcell    </h3></B></td>
<td><B><h3>castrbc  </h3></B></td>
<td><B><h3>castwbc  </h3></B></td>
<td><B><h3>granularcast    </h3></B></td>
<td><B><h3>crystalas    </h3></B></td>
<td><B><h3>bacteria  </h3></B></td>


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
echo "<td>".$row['color']."</td>";
echo"<td>".$row['ph']."</td>";
echo"<td>".$row['gravity']."</td>";
echo"<td>".$row['albumin']."</td>";
echo"<td>".$row['glucose']."</td>";
echo"<td>".$row['ketone']."</td>";
echo"<td>".$row['bilirubin']."</td>";
echo "<td>".$row['blood']."</td>";
echo"<td>".$row['urobilinogen']."</td>";
echo"<td>".$row['nitrite']."</td>";
echo"<td>".$row['epithelialcell']."</td>";
echo"<td>".$row['castrbc']."</td>";
echo"<td>".$row['castwbc']."</td>";
echo"<td>".$row['granularcast']."</td>";
echo"<td>".$row['crystalas']."</td>";
echo"<td>".$row['bacteria']."</td>";
 ?>
     
      
      <?php
echo "</tr></table";  
}
}
else{
  echo "No patient is found in this class";
}}
?>
<html>     
<head>     
<title>Classs Registration View page</title>    
</head>     
<body style="background-color: #6897bb;">
<a href="searchurinalysis.html"><br><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>
</BODY>
</html>





