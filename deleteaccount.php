<body style="background-color: #6897bb;">
<?php
include('connect.php');
?>
<?php
$r = $_POST['role'];
$n = $_POST['patientname'];
	//if (isset('submit')) {
	//	$valid = $_POST['name'];
	//if(!$valid || $valid == ""){
	//echo "Did not fill all the data";
	//include("Location:view.html");
	//}
$find = mysql_query("SELECT * from createaccount  where role='doctor'||role='laboratorist'||role='pharmacist'");

echo "<table border='1' width='100%'>";
			echo "<tr class='head'>"; 
			echo "<th>ID</th>";
				  echo "<th>firstname</th>";
				  echo "<th>middlename</th>";
				  echo "<th>patientname</th>";
				  echo "<th>password</th>";
				  echo "<th>nationallity</th>";
				  echo "<th>gender</th>";
				    echo "<th>age</th>";
				      echo "<th>zone</th>";
				        echo "<th>woreda</th>";
				          echo "<th>kebele</th>";
				          echo "<th>phone number</th>";
				          echo "<th>status</th>";
				       
				          echo "<th>role</th>";
				         echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				   echo "<td>".$row['id']."</td>";
				  echo "<td>".$row['firstname']."</td>";
				  echo "<td>".$row['middlename']."</td>";
				  echo "<td>".$row['patientname']."</td>";
				  echo "<td>".$row['password']."</td>";
				  echo "<td>".$row['nationality']."</td>";
				  echo "<td>".$row['gender']."</td>";
				  echo "<td>".$row['age']."</td>";
				  echo "<td>".$row['zone']."</td>";
				  echo "<td>".$row['woreda']."</td>";
				  echo "<td>".$row['kebele']."</td>";
				  echo "<td>".$row['phonenumber']."</td>";
				  echo "<td>".$row['status']."</td>";
				  echo "<td>".$row['role']."</td>";
		
				  ?>
				 <td> <a href="deleteacct.php?id=<?php echo $row['id'];?>" class='action'>DELETE</a></td>
			
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
<a href="adminhomepage.php">BACK</a>