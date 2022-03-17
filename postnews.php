
<?php 
include('header1.php'); ?>

<body>

    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('modal1_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;" >image</th>
                                    <th style="text-align:center;" >News title</th>
                                   <th style="text-align:center;">Description</th>
                                    <th style="text-align:center;">Starting Date</th>
                                    <th style="text-align:center;">Ending Date</th>
                                   <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from postnews order by news_id ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['news_id'];
								?>
								<tr>
                                    <td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;"><a       href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['image'] != ""): ?>
									<img src="upload/<?php echo $row['image']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['news_title']; ?></td>
                                 <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['desc']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['start_date']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['end_date']; ?></td>
								
								
								
								<td style="text-align:center; width:350px;">
									<a href="newsedit.php<?php echo '?news_id='.$id; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
								</td>
									

										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="delete2.php<?php echo '?news_id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['news_title']." ".$row['desc']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['image'] != ""): ?>
								<img src="images/<?php echo $row['image']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>

								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>

<center><h3><a href="admin.php">Go Back</a></h3></center>

</body>
</html>

