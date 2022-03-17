<body style="background-color: #6897bb;">
<?php
include("connect.php");
?>
<?php

$pid = $_GET['id'];
//echo "Lab number=$pid";
$query= "SELECT * FROM clinicalchemistry where labid='$pid'";
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
  $glufasting = $row[8];
  $bun = $row[9];
  $glurandom = $row[10];
  $totalprotein = $row[11];
  $albumin = $row[12];
  $ldh = $row[13];
  $alpha1globulin = $row[14];
  $alpha2globulin = $row[15];
  $betaglobulin = $row[16];
  $gama = $row[17];
  $lab_id = $row[18];
  //$bsp = $row[16];
}?>

<form name="reg" action="editclinicalchemistry.php?edit_form=<?php echo $patient_id ?>&l_id=<?php echo $lab_id ?>";" method="post">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <td colspan="1" width="250">
        <div align="center">  
          </div></td>

      </tr>
       <tr>
        <td><div align="right">glufasting:</div></td>
        <td><input type="text" name="h" value= '<?php echo $glufasting; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">bun:</div></td>
        <td><input type="text" name="i" value= '<?php echo $bun; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">glurandom:</div></td>
        <td><input type="text" name="j" value= '<?php echo $glurandom; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">total protein:</div></td>
        <td><input type="text" name="k" value= '<?php echo $totalprotein; ?>'></td>
      </tr>
       <tr>
        <td><div align="right">albumin:</div></td>
        <td><input type="text" name="l" value= '<?php echo $albumin; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">ldh:</div></td>
        <td><input type="text" name="m" value= '<?php echo $ldh; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">alpha1globulin:</div></td>
        <td><input type="text" name="n" value= '<?php echo $alpha1globulin; ?>'></td>
      </tr>
       <tr>
        <td><div align="right">alpha2globulin:</div></td>
        <td><input type="text" name="o" value= '<?php echo $alpha2globulin; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">gama:</div></td>
        <td><input type="text" name="p" value= '<?php echo $gama; ?>'></td>
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
  $glufasting = $_POST['h'];
    $bun = $_POST['i'];
  $glurandom = $_POST['j'];
  $totalprotein = $_POST['k'];
  $albumin = $_POST['l'];
    $ldh = $_POST['m'];
  $alpha1globulin = $_POST['n'];
    $alpha2globulin = $_POST['o'];
  $gama = $_POST['p'];
  $query1 = "UPDATE clinicalchemistry set glufasting='$glufasting',bun='$bun',glurandom='$glurandom',totalprotein='$totalprotein',albumin='$albumin',ldh='$ldh',alpha1globulin='$alpha1globulin',alpha2globulin='$alpha2globulin',gama='$gama' WHERE patient_id='$patient_id' and labid='$l_id'";
 mysql_query($query1);
    echo "<script>window.open('viewclinicalchemistry.php?updated=Record has been updated succesfully.','_self')</script>";
 }
  ?>






