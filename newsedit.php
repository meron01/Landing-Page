<?php include('header1.php'); 

$ID=$_GET['news_id'];


?>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> Edit News Details</h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
				
					<div class="alert alert-info">
						<a href="newsindex.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>

<?php
  $query=mysql_query("select * from news_master where news_id='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:175px;">
					  
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">News Name</label>
						<div class="col-sm-4">
						  <input type="text" name="news_name" value="<?php echo $row ['news_name']; ?>" class="form-control" id="inputEmail3" placeholder="Event Name" required >
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Starting Date</label>
						<div class="col-sm-4">
						  <input type="date" name="start_date" value="<?php echo $row ['start_date']; ?>" class="form-control" id="inputEmail3" placeholder="Starting Date" required >
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Ending Date</label>
						<div class="col-sm-4">
						  <input type="date" name="end_date" value="<?php echo $row ['end_date']; ?>" class="form-control" id="inputEmail3" placeholder="Ending Date" required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Discription</label>
						<div class="col-sm-4">
						  <input type="text" name="dis" value="<?php echo $row ['dis']; ?>" class="form-control" id="inputEmail3" placeholder="Discription" required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Update</button>
						</div>
					  </div>
					</form>
							
<?php
$id =$_GET['news_id'];
if (isset($_POST['update'])) {

						$school_id=$_POST['news_name'];
						$firstname=$_POST['start_date'];
						$middlename=$_POST['end_date'];
						$middlename1=$_POST['dis'];
						
						


mysql_query(" UPDATE news_master SET news_name='$school_id', start_date='$firstname', end_date='$middlename', dis='$middlename1' WHERE news_id = '$id' ")or die(mysql_error());
echo "<script>alert('Successfully Updated!'); window.location='newsindex.php'</script>";
}



?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->



