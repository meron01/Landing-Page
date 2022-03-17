<body style="background-color: #6897bb;">
<?php
include("connect.php");
?>
<?php

$pid = $_GET['id'];
//echo "Lab number=$pid";
$query= "SELECT * FROM hematology where labid='$pid'";
$run = mysql_query($query);
while($row = mysql_fetch_array($run))
{
  
$patient_id = $row[0];
$patientname = $row[1];
  $patientaddress = $row[2];
  $age = $row[3];
  $sex = $row[4];  
  $clinicaldata = $row[5];
  $hospitalnumber = $row[6];
  $dateofcollection = $row[7];
  $bands = $row[8];
  $lymphocytes = $row[9];
  $basophils = $row[10];
  $hematocrit = $row[11];
  $bloodparasite = $row[12];
  $segment = $row[13];
  $monocytes = $row[14];
  $rbc = $row[15];
  $hemoglobin = $row[16];
  $bleedingtime = $row[17];
   $lab_id = $row[18];
}?>

<form name="reg" action="edithematology.php?edit_form=<?php echo $patient_id ?>&l_id=<?php echo $lab_id ?>";" method="post">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
      
       <tr>
        <td><div align="right">bands:</div></td>
        <td><input type="text" name="h" value= '<?php echo $bands; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">lymphocytes:</div></td>
        <td><input type="text" name="i" value= '<?php echo $lymphocytes; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">basophils:</div></td>
        <td><input type="text" name="j" value= '<?php echo $basophils; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">hematocrit:</div></td>
        <td><input type="text" name="k" value= '<?php echo $hematocrit; ?>'></td>
      </tr>
       <tr>
        <td><div align="right">blood parasite:</div></td>
        <td><input type="text" name="l" value= '<?php echo $bloodparasite; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">segments:</div></td>
        <td><input type="text" name="m" value= '<?php echo $segment; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">monocytes:</div></td>
        <td><input type="text" name="n" value= '<?php echo $monocytes; ?>'></td>
      </tr>
       <tr>
        <td><div align="right">rbc:</div></td>
        <td><input type="text" name="o" value= '<?php echo $rbc; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">hemoglobin:</div></td>
        <td><input type="text" name="p" value= '<?php echo $hemoglobin; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">bleedingtime:</div></td>
        <td><input type="text" name="q" value= '<?php echo $bleedingtime; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">Lab number:</div></td>
        <td><?php echo $lab_id; ?></td>
      </tr>
      <tr>      
        <td><div align="right"></div></td>
        <td><input name="Update" type="submit" value="Update" /></td>
       </tr>
    </table>
    </form>
</div>
</p></TABLE></TD></TR></TABLE>
</BODY></html>
<?php
if (isset($_POST['Update'])) {
  $patient_id = $_GET['edit_form'];
  $l_id = $_GET['l_id'];
  $bands = $_POST['h'];
    $lymphocytes = $_POST['i'];
  $basophils = $_POST['j'];
  $hematocrit = $_POST['k'];
  $bloodparasite = $_POST['l'];
    $segments = $_POST['m'];
  $monocytes = $_POST['n'];
    $rbc = $_POST['o'];
  $hemoglobin = $_POST['p'];
  $bleedingtime = $_POST['q'];
  $query1 = "UPDATE hematology set bands='$bands',lymphocytes='$lymphocytes',basophils='$basophils',hematocrit='$hematocrit',bloodparasite='$bloodparasite',segments='$segments',monocytes='$monocytes',rbc='$rbc',hemoglobin='$hemoglobin',bleedingtime='$bleedingtime' WHERE patient_id='$patient_id' and labid='$l_id'";
 mysql_query($query1);
    echo "<script>window.open('viewhematology.php?updated=Record has been updated succesfully.','_self')</script>";
 }
  ?>
  



  .