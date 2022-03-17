<body style="background-color: #6897bb;">
<?php
include('connect.php');
?>
<?php
  //if (isset('submit')) {
  //  $valid = $_POST['name'];
  //if(!$valid || $valid == ""){
  //echo "Did not fill all the data";
  //include("Location:view.html");
  //}
$find = mysql_query("SELECT * from images ");

echo "<table border='1' width='100%'>";
      echo "<tr class='head'>"; 
      echo "<th>image</th>";
          echo "<th>text</th>";
          
                  echo "<th>DELETE</th>";
                 echo "</tr>";
      while($row = mysql_fetch_array($find)){
          echo "<tr class='t1'>";
           echo "<td>".$row['image']."</td>";
          echo "<td>".$row['text']."</td>";
          
          ?>
         <td> <a href="deletepost.php?id=<?php echo $row['id'];?>" class='action'>DELETE</a></td>
      
      <?php
          echo "</tr>";
        }
      echo "</table>";
    ?>
 
<a href="adminhomepage.php">BACK</a>