<?php 
include ('connection.php'); 
include ('header.php'); 
$id=$_GET['ID'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
  $query=mysql_query("select * from place where ID='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Image</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['image'] != ""): ?>
										<img src="images/<?php echo $row['image']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									</label>
                                    <div class="controls">
                                        <input type="file" name="image" style="margin-left:27px;">
										<button type="submit" name="image" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;">Update</button>
                                    </div>
                                </div>
                                <hr>
                                <h4>Place Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Name:</label>
                                    <div class="controls">
                                        <input type="date" name="date" required value=<?php echo $row['date']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">descripton:</label>
                                    <div class="controls">
                                        <input type="text" name="description" required value=<?php echo $row['description']; ?>>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Address:</label>
                                    <div class="controls">
                                        <input type="text" name="address" required value=<?php echo $row['address']; ?>>
                                    </div>
                                    </div>
                                     
                                    
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="place.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
							
<?php
$id=$_REQUEST['ID'];
if (isset($_POST['image'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

mysql_query(" UPDATE place SET image='$location' WHERE ID = '$id' ")or die(mysql_error());
header('location:place.php');
}
?>
							
							<?php
							
							
							$id=$_REQUEST['ID'];

$result = mysql_query("SELECT * FROM place WHERE ID = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$name= $test['name'];
									$date= $test['date'];
									$dsc= $test['description'];
									$address= $test['address'];
									
				
				
                            
if (isset($_POST['update'])) {
                               
									$name= $_POST['name'];
									$date= $_POST['date'];
									$dsc= $_POST['description'];
								
                                    $address= $_POST['address'];
								
mysql_query("UPDATE place SET name = '$name' , date = '$date' , description ='$dsc',
   address = '$address' WHERE ID = '$id'") or die(mysql_error()); 	
echo "<script>window.location='place.php';</script>";	

					
								}
								?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								