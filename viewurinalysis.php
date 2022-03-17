<body style ="background-color: #6897bb;">
<?php
include('connect.php');
?>
<?php
	//if (isset('submit')) {
	//	$valid = $_POST['name'];
	//if(!$valid || $valid == ""){
	//echo "Did not fill all the data";
	//include("Location:view.html");
	//}
$find = mysql_query("SELECT * from urinalysis ");

echo "<table border='1' width='100%'>";
			echo "<tr class='head'>";
			echo "<th>patient_id</th>";
				  echo "<th>patientname</th>";
				  echo "<th>patientaddress</th>";
				  echo "<th>age</th>";
				  echo "<th>sex</th>";
				  echo "<th>clinicaldata</th>";
				  echo "<th>hospitalnumber</th>";
				    echo "<th>dateofcollection</th>";
				      echo "<th>color</th>";
				        echo "<th>ph</th>";
				          echo "<th>gravity</th>";
				          echo "<th>albumin</th>";
				          echo "<th>glucose</th>";
				          echo "<th>ketone</th>";
				          echo "<th>bilirubin</th>";
				          echo "<th>blood</th>";
				          echo "<th>urobilinogen</th>";
				          echo "<th>nitrite</th>";
				            echo "<th>urinehcg</th>";
				          echo "<th>rbc</th>";
				          echo "<th>wbc</th>";
				          echo "<th>epithelialcell</th>";
				          echo "<th>castrbc</th>";
				            echo "<th>castwbc</th>";
				            echo "<th>granularcast</th>";
				          //echo "<th>hyalicast</th>";
				          echo "<th>crystals</th>";
				          echo "<th>bacteria</th>";
				          echo "<th>Lab number</th>";
				         echo "<th>Edit</th>";
				         echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['patient_id']."</td>";
				  echo "<td>".$row['patientname']."</td>";
				  echo "<td>".$row['patientaddress']."</td>";
				  echo "<td>".$row['age']."</td>";
				  echo "<td>".$row['sex']."</td>";
				  echo "<td>".$row['clinicaldata']."</td>";
				  echo "<td>".$row['hospitalnumber']."</td>";
				  echo "<td>".$row['dateofcollection']."</td>";
				  echo "<td>".$row['color']."</td>";
				  echo "<td>".$row['ph']."</td>";
				  echo "<td>".$row['gravity']."</td>";
				  echo "<td>".$row['albumin']."</td>";
				  echo "<td>".$row['glucose']."</td>";
				  echo "<td>".$row['ketone']."</td>";
				  echo "<td>".$row['bilirubin']."</td>";
				  echo "<td>".$row['blood']."</td>";
				  echo "<td>".$row['urobilinogen']."</td>";
				  echo "<td>".$row['nitrite']."</td>";
				  echo "<td>".$row['urinehcg']."</td>";
				    echo "<td>".$row['rbc']."</td>";
				  echo "<td>".$row['wbc']."</td>";
				  echo "<td>".$row['epithelialcell']."</td>";
				  echo "<td>".$row['castrbc']."</td>";
				  echo "<td>".$row['castwbc']."</td>";
				  	  echo "<td>".$row['granularcast']."</td>";
				 // echo "<td>".$row['hyalicast']."</td>";
				  echo "<td>".$row['crystals']."</td>";
				  echo "<td>".$row['bacteria']."</td>";
				   echo "<td>".$row['labid']."</td>";
				  ?>
				   <td> <a href="editurinalysis.php?id=<?php echo $row['labid'];?>" class='action'>Edit</a></td>
			
			<?php
				  echo "</tr>";
  			}
			echo "</table>";
		?>
	</li>
    </ul>
</form>
</body>
</html>
<a href="laboratoristhomepage.php">BACK</a>