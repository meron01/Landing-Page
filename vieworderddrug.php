<body style ="background-color: #6897bb;">
<?php
include('connect.php');
?>
<a href="pharmacisthomepage.php">BACK</a>
<?php
	//if (isset('submit')) {
	//	$valid = $_POST['name'];
	//if(!$valid || $valid == ""){
	//echo "Did not fill all the data";
	//include("Location:view.html");
	//}
$find = mysql_query("SELECT * from orderdrug ");

echo "<table border='1' width='100%'>";
			echo "<tr class='head'>"; 
			echo "<th>patient_id</th>";
				  echo "<th>patientname</th>";
				  echo "<th>Drug name</th>";
				  echo "<th>quantity</th>";
				         echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				   echo "<td>".$row['patient_id']."</td>";
				  echo "<td>".$row['patientname']."</td>";
				  echo "<td>".$row['drugname']."</td>";
				  echo "<td>".$row['quantity']."</td>";
				  ?>
	
			
			<?php
				  echo "</tr>";
  			}
			echo "</table>";
	
