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
$find = mysql_query("SELECT * from drreply ");

echo "<table border='1' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>drname</th>";
				  echo "<th>answers</th>";
				  echo "<th>question</th>";
				  
				          echo "<th>ANSWER</th>";
				         echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['patient_id']."</td>";
				  echo "<td>".$row['patientname']."</td>";
				  echo "<td>".$row['question']."</td>";
				  
				  ?>
				 <td> <a href="doctorreply.html">ANSWER</a></td>
			
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
