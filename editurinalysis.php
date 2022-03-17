<body style="background-color: #6897bb;">
<?php
include("connect.php");
?>
<?php 

$pid = $_GET['id'];
//echo "Lab number=$pid";
$query= "SELECT * FROM urinalysis where labid='$pid'";
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
  $color = $row[8];
  $ph = $row[9];
  $gravity = $row[10];
  $albumin = $row[11];
  $glucose = $row[12];
  $ketone = $row[13];
  $bilirubin = $row[14];
  $blood = $row[15];
  $urobilinogen = $row[16];
  $nitrite = $row[17];
  $urinehcg = $row[18];
  $rbc = $row[19];
  $wbc = $row[20];
  $epithelialcell = $row[21];
  $castrbc = $row[22];
  $castwbc = $row[23];
  $granularcast = $row[24];
  $crystals = $row[25];
  $bacteria = $row[26];
  $lab_id = $row[27];
}?>

<form name="reg" action="editurinalysis.php?edit_form=<?php echo $patient_id ?>&l_id=<?php echo $lab_id ?>";" method="post">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <td colspan="1" width="250">
        <div align="center">  
          </div></td>

      </tr>
       <tr>
        <td><div align="right">color:</div></td>
        <td><input type="text" name="a" value= '<?php echo $color; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">ph:</div></td>
        <td><input type="text" name="b" value= '<?php echo $ph; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">gravity:</div></td>
        <td><input type="text" name="c" value= '<?php echo $gravity; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">albumin:</div></td>
        <td><input type="text" name="d" value= '<?php echo $albumin; ?>'></td>
      </tr>
       <tr>
        <td><div align="right">glucose:</div></td>
        <td><input type="text" name="e" value= '<?php echo $glucose; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">ketone:</div></td>
        <td><input type="text" name="f" value= '<?php echo $ketone; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">bilirubin:</div></td>
        <td><input type="text" name="g" value= '<?php echo $bilirubin; ?>'></td>
      </tr>
       <tr>
        <td><div align="right">blood:</div></td>
        <td><input type="text" name="h" value= '<?php echo $blood; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">urobilinogen:</div></td>
        <td><input type="text" name="i" value= '<?php echo $urobilinogen; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">nitrite:</div></td>
        <td><input type="text" name="j" value= '<?php echo $nitrite; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">urinehcg:</div></td>
        <td><input type="text" name="k" value= '<?php echo $urinehcg; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">rbc:</div></td>
        <td><input type="text" name="l" value= '<?php echo $rbc; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">wbc:</div></td>
        <td><input type="text" name="m" value= '<?php echo $wbc; ?>'></td>
      </tr>
      
      <tr>
        <td><div align="right">epithelial cell:</div></td>
        <td><input type="text" name="n" value= '<?php echo $epithelialcell; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">cast rbc:</div></td>
        <td><input type="text" name="o" value= '<?php echo $castrbc; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">cast wbc:</div></td>
        <td><input type="text" name="p" value= '<?php echo $castwbc; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">granular cast:</div></td>
        <td><input type="text" name="q" value= '<?php echo $granularcast; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">crystals:</div></td>
        <td><input type="text" name="r" value= '<?php echo $crystals; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">bacteria:</div></td>
        <td><input type="text" name="s" value= '<?php echo $bacteria; ?>'></td>
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
  $color = $_POST['a'];
    $ph = $_POST['b'];
  $gravity = $_POST['c'];
  $albumin = $_POST['d'];
  $glucose = $_POST['e'];
    $ketone = $_POST['f'];
  $bilirubin = $_POST['g'];
    $blood = $_POST['h'];
  $urobilinogen = $_POST['i'];
  $nitrite = $_POST['j'];
  $urinehcg = $_POST['k'];
    $rbc = $_POST['l'];
  $wbc = $_POST['m'];
  $epithelialcell = $_POST['n'];
  $castrbc = $_POST['o'];
    $castwbc = $_POST['p'];
  $granularcast = $_POST['q'];
    $crystals = $_POST['r'];
  $bacteria = $_POST['s'];
  $query1= "UPDATE urinalysis set color='$color',ph='$ph',gravity='$gravity',albumin='$albumin',glucose='$glucose',ketone='$ketone',bilirubin='$bilirubin',blood='$blood',urobilinogen='$urobilinogen',nitrite='$nitrite',urinehcg='$urinehcg',rbc='$rbc',wbc='$wbc',epithelialcell='$epithelialcell',castrbc='$castrbc',castwbc='$castwbc',granularcast='$granularcast',crystals='$crystals',bacteria='$bacteria' WHERE patient_id='$patient_id' and labid='$l_id'";
 mysql_query($query1);
    echo "<script>window.open('viewurinalysis.php?updated=Record has been updated succesfully.','_self')</script>";
 }
  ?>










