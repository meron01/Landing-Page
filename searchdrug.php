 <?php
require("connect.php");
?>
<?php
$stockcode = $_POST['o'];
//$mobile = $_POST['m'];

if(isset($_POST['submit']))
{
  if(!$_POST['o'])
  {
    echo "You did not fill all the required data";
    include('adddrug.html');
    die();
  }
 $stud = mysql_query("SELECT * FROM adddrug where stockcode='$stockcode' ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=2 height=200>";
echo "<tr>
<td><B><h3>stockcode</h3></B></td>
<td><B><h3> itemname   </h3></B></td>
<td><B><h3>unit    </h3></B></td>
<td><B><h3>quantity    </h3></B></td>
<td><B><h3>unitprice    </h3></B></td>
<td><B><h3>totalsellingprice  </h3></B></td>
<td><B><h3>manufacturer  </h3></B></td>
<td><B><h3>batchnumber  </h3></B></td>
<td><B><h3>expdate  </h3></B></td>

</tr>";
	while($row = mysql_fetch_array ($stud))
  {
  	echo "<tr>";
echo "<td>".$row['stockcode']."</td>";
echo "<td>".$row['itemname']."</td>";
echo"<td>".$row['unit']."</td>";
echo"<td>".$row['quantity']."</td>";
echo"<td>".$row['unitprice']."</td>";
echo"<td>".$row['totalsellingprice']."</td>";
echo"<td>".$row['manufacturer']."</td>";
echo"<td>".$row['batchnumber']."</td>";
echo"<td>".$row['expdate']."</td>";
echo "</tr></table";  
}
}
else{
  echo "No such drug  found in the database";
}}
?>
<html>         
<BODY bottomMargin=0 leftMargin=90 rightMargin=90  topMargin=5>
<a href="searchdrug.html"><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>
</BODY>
</html>





