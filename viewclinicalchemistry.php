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
$find = mysql_query("SELECT * from clinicalchemistry ");

echo "<table border='1' width='100%'>";
			echo "<tr class='head'>";
			echo "<th>patient_id</th>";
			      // echo "<th>id</th>";
				  echo "<th>patientname</th>";
				  echo "<th>patientaddress</th>";
				  echo "<th>age</th>";
				  echo "<th>sex</th>";
				  echo "<th>clinicaldata</th>";
				  echo "<th>hospitalnumber</th>";
				    echo "<th>dateofcollection</th>";
				      echo "<th>glufasting</th>";
				        echo "<th>bun</th>";
				          echo "<th>glurandom</th>";
				          echo "<th>totalprotein</th>";
				          echo "<th>albumin</th>";
				          echo "<th>ldh</th>";
				          echo "<th>alpha1globulin</th>";
				          echo "<th>alpha2globulin</th>";
				          echo "<th>betaglobulin</th>";
				          echo "<th>gama</th>";
				          echo "<th>Lab number</th>";
				          echo "<th>Edit</th>";
				         echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				 echo "<td>".$row['patient_id']."</td>";
				  //echo "<td>".$row['id']."</td>";
				  echo "<td>".$row['patientname']."</td>";
				  echo "<td>".$row['patientaddress']."</td>";
				  echo "<td>".$row['age']."</td>";
				  echo "<td>".$row['sex']."</td>";
				  echo "<td>".$row['clinicaldata']."</td>";
				  echo "<td>".$row['hospitalnumber']."</td>";
				  echo "<td>".$row['dateofcollection']."</td>";
				  echo "<td>".$row['glufasting']."</td>";
				  echo "<td>".$row['bun']."</td>";
				  echo "<td>".$row['glurandom']."</td>";
				  echo "<td>".$row['totalprotein']."</td>";
				  echo "<td>".$row['albumin']."</td>";
				  echo "<td>".$row['ldh']."</td>";
				  echo "<td>".$row['alpha1globulin']."</td>";
				  echo "<td>".$row['alpha2globulin']."</td>";
				  echo "<td>".$row['betaglobulin']."</td>";
				  echo "<td>".$row['gama']."</td>";
                   echo "<td>".$row['labid']."</td>";
				  ?>
				  <td> <a href="editclinicalchemistry.php?id=<?php echo $row['labid'];?>" class='action'>Edit</a></td>
			
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