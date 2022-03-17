<?php
include("connect.php");
?>
<?php
$editAsses = $_GET['patient_id'];
$name = $_GET['name'];
$q = $_GET['q'];

$query= "SELECT * FROM pquestion ";
$run = mysql_query($query);
while($row = mysql_fetch_array($run))
{
$patient_id = $row[0];
  $patientname = $row[1];
  $question = $row[2];
}?>

<form name="reg" action="answerquestion.php?edit_form=<?php echo $editAsses ?>";" method="post">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <td colspan="1" width="250">
        <div align="center">  
          </div></td>

      </tr>
       <tr>
        <td><div align="right">patient_id: </div></td>
        <td><?php echo $editAsses; ?></td>
      </tr>
       <tr>
        <td><div align="right">patientname: </div></td>
        <td><?php echo $name; ?></td>
      </tr>
       <tr>
        <td><div align="right">question: </div></td>
        <td><?php echo $q; ?></td>
      </tr>


      <tr>
        <td>Answers<br>
        </td>
        <td><textarea cols="60" rows="15" name="answers" required="required"></textarea> </td>
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
 // $patient_id = $_POST['i'];
  $patientname = $_POST['n'];
  $question = $_POST['q'];
  $answer=$_POST['answers'];
  $query = "UPDATE ppquestion set ansewers='$answer' where patient_id='$patient_id' ";
 mysql_query($query);
    echo "<script>window.open('doctorviewquestion.php?updated=answer for question has beeb sent succesfully.','_self')</script>";
 }
  ?>
  