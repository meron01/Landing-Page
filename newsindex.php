<?php

	
	?>

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
                                    <th style="text-align:center;" >News Name</th>
                                    <th style="text-align:center;">Starting Date</th>
                                    <th style="text-align:center;">Ending Date</th>
                                    <th style="text-align:center;">Discription</th>
                                    
                          
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from news_master order by news_id ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['news_id'];
								?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['news_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['start_date']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['end_date']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['dis']; ?></td>
								
								
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

								<h3 id="myModalLabel"><b><?php echo $row['news_name']." ".$row['start_date']; ?></b></h3>
								</div>
								<div class="modal-body">
								
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>



</body>
</html>

<?php
	//}	
	
?>

