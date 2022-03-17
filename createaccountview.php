 <?php
require("connect.php");
?>
<?php
$occupation = $_POST['o'];
$mobile = $_POST['m'];

if(isset($_POST['submit']))
{
  if(!$_POST['o']|| !$_POST['m'])
  {
    echo "You did not fill all the required data";
    include('createaccount.html');
    die();
  }
 $stud = mysql_query("SELECT * FROM createaccount where occupation='$occupation' AND mobile='$mobile' ");
  $row = mysql_num_rows($stud);
if($row!=0)
{
echo "<table border=2 height=200>";
echo "<tr>
<td><B><h3>first_name</h3></B></td>
<td><B><h3> last_name   </h3></B></td>
<td><B><h3>age    </h3></B></td>
<td><B><h3>gender    </h3></B></td>
<td><B><h3>occupation    </h3></B></td>
<td><B><h3>mobile  </h3></B></td>
<td><B><h3>address  </h3></B></td>
</tr>";
  while($row = mysql_fetch_array ($stud))
  {
    echo "<tr>";
echo "<td>".$row['first_name']."</td>";
echo "<td>".$row['last_name']."</td>";
echo"<td>".$row['age']."</td>";
echo"<td>".$row['gender']."</td>";
echo"<td>".$row['occupation']."</td>";
echo"<td>".$row['mobile']."</td>";
echo"<td>".$row['address']."</td>";
echo "</tr></table";  
}
}
else{
  echo "No student is found in this class";
}}
?>
<html>     
<head>     
<title>Classs Registration View page</title>    
</head>     
<BODY bottomMargin=0 leftMargin=90 rightMargin=90  topMargin=5>
<a href="patientview.html"><b>Back</b></a>&nbsp;
<input type="button" align-top="0" onClick="window.print();" value="Print "/></br><br>
</BODY>
</html>