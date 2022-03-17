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
$find = mysql_query("SELECT * from pquestion ");

echo "<table border='1' width='100%'>";
      echo "<tr class='head'>";
          echo "<th>patient_id</th>";
          echo "<th>patient name</th>";
          echo "<th>question</th>";
          
        echo "<th>Answer</th>";
        echo "</tr>";
      while($row = mysql_fetch_array($find)){
        $patient_id=$row['patient_id'];
        $name=$row['patientname'];
        $question=$row['question'];
        $id=$row['id'];
          echo "<tr class='t1'>";
          echo "<td>".$row['patient_id']."</td>";
          echo "<td>".$row['patientname']."</td>";
          echo "<td>".$row['question']."</td>";
          echo "<td>".$row['ansewers']."</td>";
                    
          ?>
         <td> <a href="answerquestion.php?patient_id=<?php echo $patient_id ?>&id=<?php echo $id ?>&name=<?php echo $name ?>&q=<?php echo $question ?>">ANSWER</a></td>
      
      <?php
          echo "</tr>";
        }
      echo "</table>";
    ?>
<a href="doctorhomepage.php">BACK</a>