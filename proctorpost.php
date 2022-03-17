<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page',window.location='login.php');
 </script>
 <?php
 }
 ?>

<?php

$user_id=$_SESSION['user_id'];

$result=mysql_query("select * from users where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
?>
<?php

$user_id=$_SESSION['user_id'];

$result=mysql_query("select * from users where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
$adminthumbnails=$row['adminthumbnails'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>UOG DMS | Proctor |submitcomment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link href="css/logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<link rel="icon" href="images/favicon.jpg" type="image/ico" sizes="16x16">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	      <a class="navbar-brand" href="#" style="font-size:20px;"><img src="dormlogo.png"> <img src="<?php echo $row['adminthumbnails']; ?>" height="50"width="80px;">         <?php 
 echo $FirstName."&nbsp;".$middleName." ".'</font>';?></a>
			
			
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
			
		        <li class="dropdown">
				
		            <a href="logout.php"><i class="fa fa-user"></i><span>Logout</span></a>
		        </li>
		        <li class="dropdown">
		        	<a href="www.uo.edu.et" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>UOG official web site</span></a>

		        </li>
		        
		        
		       
		    </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="proctor.php">Home</a></li>
          <li><a href="submitcomment.php">Submit Comment</a></li>
  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Your Account<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Change Picture</span></a></li>
               
              </ul>
            </li>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
<!-- banner -->
  <div class="courses_banner" style="background-image:url();">
  <h2 style="color:#2F4F4F;">SUBMIT COMMENT</h2>
  	<div class="container">
  	<div  style="float:left;display:inline-block; width:300px; height:600px; background-image:url('images/adminback1.jpg');-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;" >
	<br>
	<br>
	<p style="color:green;font-size:25px;text-align:center;"><u>Manage Records</u></P><br><br>
	
		
	<input type="submit" value="View Student Information" 
    onclick="window.location='viewstu.php';" style="background-color: #2F4F4F; border: blue;color: white;padding: 15px 32px;text-align:center;text-decoration: none;display: inline-block;font-size: 20px;-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;" />
	
	<input type="submit" value="Register Rooms" 
    onclick="window.location='registerrooms.php';" style="background-color: #2F4F4F; border: blue;color: white;padding: 15px 32px;text-align:center;text-decoration: none;display: inline-block;font-size: 20px;-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;" />
		<input type="submit" value="Delete Rooms" 
    onclick="window.location='deleterooms.php';" style="background-color: #2F4F4F; border: blue;color: white;padding: 15px 32px;text-align:center;text-decoration: none;display: inline-block;font-size: 20px;-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;" />
	<input type="submit" value="Assign Students " 
    onclick="window.location='assign.php';" style="background-color: #2F4F4F; border: blue;color: white;padding: 15px 32px;text-align:center;text-decoration: none;display: inline-block;font-size: 20px;-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;" />
	<input type="submit" value="Add Student " 
    onclick="window.location='add.php';" style="background-color: #2F4F4F; border: blue;color: white;padding: 15px 32px;text-align:center;text-decoration: none;display: inline-block;font-size: 20px;-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;" />
	<input type="submit" value="Remove Students " 
    onclick="window.location='removestu.php';" style="background-color: #2F4F4F; border: blue;color: white;padding: 15px 32px;text-align:center;text-decoration: none;display: inline-block;font-size: 20px;-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;" />
	
	
	<input type="submit" value="Generate Report" 
    onclick="window.location='greporta.php';" style="background-color: #2F4F4F; border: blue;color: white;padding: 15px 32px;text-align:center;text-decoration: none;display: inline-block;font-size: 20px;-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;" /> <br><br>
	
</div>
	<div style=" width:1140px; height:600px; background-image:url('images/adminback.png');-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;">
	<script type='text/javascript'>
function formValidation(){
//assign the fields
        
		var email=document.getElementById('email');
		var fname = document.getElementById('fname');
	var message = document.getElementById('message');
	if(emailValidator(email,"check your E-mail format")){
if(lengthRestriction(fname, 5, 25,"for your full name")){
if(lengthRestriction(message, 3, 100,"for your comment")){


	return true;
	}
	}
	}	
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>
	  <form id="form1" name="login" method="POST" action="submitcomment.php" onsubmit='return formValidation()'>
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;margin: 4px 2px;
    cursor: pointer;border-radius: 2em 1em 2em / 0.5em 2em;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Submit Comment</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;"><a href="proctor.php" title="Close"><img src="images/close_icon.gif"></a></div>
 
 
 </div>
 
	       <p style="font-size:15px;text-align:center;" class='para1_text' width="160px"><font color="red">*</font> Your Full Name:
		<input type="text" name="fname" style="-moz-border-radius:10px;-khtml-border-radius: 10px; border-radius: 10px;border-color:green;color:green;font-size:20px; " value="<?php echo ''.$FirstName."&nbsp;".$middleName;?>" readonly="readonly" id="fname" required x-moz-errormessage="Enter Your Full Name" ></p><br>
	     
	       <p  style="font-size:15px;text-align:center;"class='para1_text'><font color="red">*</font> Email Address:
		<input type="text" name="email" style="-moz-border-radius:10px;-khtml-border-radius: 10px; border-radius: 10px;border-color:green;color:green;font-size:20px; " id="email" required x-moz-errormessage="Enter password"></p><br>
	    
 
	                              <p style="font-size:15px;text-align:center;" class='para1_text'><font color="red">*</font> Message:
		<textarea rows="6" cols="30" align="center" style="-moz-border-radius:10px;-khtml-border-radius: 10px; border-radius: 10px;border-color:green;color:green;font-size:20px; " name="com" id="message" placeholder='Write your comment here' required x-moz-errormessage="Enter Message"></textarea></p>
	     
    <p>&nbsp;</p>
	
    <p style="font-size:15px;text-align:center;"><input type="submit" style="-moz-border-radius:10px;-khtml-border-radius: 10px; border-radius: 10px;border-color:green;font-size:20px;width:125px; "class="button_example" name="sent" value="Send"/></p>
  
  </form>

  
   <?php
 if(isset($_POST['sent']))
 {
$sql="INSERT INTO comment (fname,email, message)
VALUES
('$_POST[fname]','$_POST[email]','$_POST[com]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
		 echo'  <p align="center"><font color="green" size="2"><img width="30px" height="30px" src="images/tick.png">&nbsp;&nbsp;Your Message has been Sent successfuly!</font></p>';
         echo' <meta content="5;submitcomment.php" http-equiv="refresh" />'; 
		 }
mysql_close($conn)
?>
                   

  </div>
</td>
</tr>
</table>
<!--End Body of section-->
</table>
</div>
  		
        
  	</div>
  </div>
    <!-- //banner -->
	<div class="admission">
	   <div class="container" >
	   	  
	  </div>
	</div>
		<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header" style="background-color:#E9967A;border-color:yellow;">
						<p style="text-align:center;color:blue;">CHANGE PICTURE</p>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<form method="post" class="form-horizontal" action="admin_pic.php" enctype="multipart/form-data">							
								<div class="control-group">
								<label class="control-label" for="inputPassword">Browse Your Computer</label><br><br>
								<div class="controls">
									<input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
								</div>
								</div>
										
					
		</div>
					<div class="modal-footer" >
						<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
						<button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> Save</button>
					</div>
					</form>
									
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
    <div class="footer">
    	<div class="container">
    		
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2017 UOG DMS . All Rights Reserved  | Design by <a href="#" target="_blank"> UOG COMPOSA 2017 GRADUATES </a> </p>
	        </div>
    	</div>
    </div>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>	