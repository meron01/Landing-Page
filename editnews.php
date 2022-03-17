<?php
include("connect.php");
?>
<?php
$editAsses = $_GET['id'];
$query= "SELECT * FROM news ";
$run = mysql_query($query);
while($row = mysql_fetch_array($run))
{
$title_id = $row[0];
$title = $row[1];
  $news = $row[2];
}?>

<form name="reg" action="editnews.php?edit_form=<?php echo $editAsses ?>";" method="post">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <td colspan="1" width="250">
        <div align="center">  
          </div></td>

      </tr>
       <tr>
        <td><div align="right">title ID:</div></td>
        <td><input type="text" name="id" value= '<?php echo $title_id; ?>'></td>
      </tr>
       <tr>
        <td><div align="right">title:</div></td>
        <td><input type="text" name="t" 



        value= '<?php echo $title; ?>'></td>
      </tr>
      <tr>
        <td><div align="right">news:</div></td>
        <td><input type="text" name="n" value= '<?php echo $news; ?>'></td>
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
  $id = $_GET['edit_form'];
  $title = $_POST['t'];
    $news = $_POST['n'];
  $query = "UPDATE news set title='$title',news='$news'";
 mysql_query($query);
    echo "<script>window.open('viewupdatednews.php?updated=Record has been updated succesfully.','_self')</script>";
 }
  ?>






  