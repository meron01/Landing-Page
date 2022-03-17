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
$find = mysql_query("SELECT * from news ");
echo "<table border='1' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>id</th>";
				  echo "<th>title</th>";
				  echo "<th>news</th>";
				  echo "<th>Edit</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['title_id']."</td>";
				  echo "<td>".$row['title']."</td>";
				  echo "<td>".$row['news']."</td>";
				  ?>
				 <td> <a href="editnews.php?id=<?php echo $row['title_id'];?>" class='action'>Edit</a></td>
			
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



