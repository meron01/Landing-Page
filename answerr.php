<?php
include("connect.php");
?>
<?php
$editAsses = $_GET['question'];
$query= "SELECT * FROM pquestion ";
$run = mysql_query($query);
while($row = mysql_fetch_array($run))
{
$patient_id = $row[0];
  $patientname = $row[1];
  $question = $row[2];
}?>

<form name="reg" action="answerr.php?edit_form=<?php echo $editAsses ?>";" method="post">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <td colspan="1" width="250">
        <div align="center">  
          </div></td>

      </tr>
       <tr>
        <td><div align="right">question:</div></td>
        <td><input type="text" name="q" value= '<?php echo $question; ?>'></td>
      </tr>
       <tr>
        <td><div align="right">answers:</div></td>
        <td><input type="text" name="a" value= '<?php echo $answers; ?>'></td>
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
  $question = $_GET['edit_form'];
  $question = $_POST['q'];
    $answers = $_POST['a'];
  $query = "UPDATE pquestion set question='$question',answers='$answers'";
 mysql_query($query);
    echo "<script>window.open('doctorviewquestion.php?updated=Record has been updated succesfully.','_self')</script>";
 }
  ?>
  