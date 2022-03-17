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
$find = mysql_query("SELECT * from hematology ");

echo "<table border='1' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>patientname</th>";
				  echo "<th>patientaddress</th>";
				  echo "<th>age</th>";
				  echo "<th>sex</th>";
				  echo "<th>clinicaldata</th>";
				  echo "<th>hospitalnumber</th>";
				    echo "<th>dateofcollection</th>";
				      echo "<th>bands</th>";
				        echo "<th>lymphocytes</th>";
				          echo "<th>basophils</th>";
				          echo "<th>hematocrit</th>";
				          echo "<th>bloodparasite</th>";
				          echo "<th>segments</th>";
				          echo "<th>monocytes</th>";
				          echo "<th>rbc</th>";
				          echo "<th>hemoglobin</th>";
				          echo "<th>bleedingtime</th>";
				          //echo "<th>Edit</th>";
				         echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['patientname']."</td>";
				  echo "<td>".$row['patientaddress']."</td>";
				  echo "<td>".$row['age']."</td>";
				  echo "<td>".$row['sex']."</td>";
				  echo "<td>".$row['clinicaldata']."</td>";
				  echo "<td>".$row['hospitalnumber']."</td>";
				  echo "<td>".$row['dateofcollection']."</td>";
				  echo "<td>".$row['bands']."</td>";
				  echo "<td>".$row['lymphocytes']."</td>";
				  echo "<td>".$row['basophils']."</td>";
				  echo "<td>".$row['hematocrit']."</td>";
				  echo "<td>".$row['bloodparasite']."</td>";
				  echo "<td>".$row['segments']."</td>";
				  echo "<td>".$row['monocytes']."</td>";
				  echo "<td>".$row['rbc']."</td>";
				  echo "<td>".$row['hemoglobin']."</td>";
				  echo "<td>".$row['bleedingtime']."</td>";
				  ?>
				 
			
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
