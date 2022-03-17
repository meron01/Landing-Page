<?php
include('connect.php');
session_start();
if(isset($_SESSION['user_id'])){
$uid=$_SESSSION['user_id'];
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en/am">
<head>
<title>Amharic Supported Online Auction System </title>

<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1" />

<meta http-equiv="refresh" content="900;url=admin.php" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/style4.css" rel="stylesheet">
    
    <script language="JavaScript" type="text/javascript">
function checkPassword()
{
	theForm = window.document.frmPassword;
	
	if (theForm.oldPassword.value == '') {
		alert('Enter current password');
		theForm.oldPassword.focus();
		return false;
	} else if (theForm.newPassword.value == '') {
		alert('Enter new password');
		theForm.newPassword.focus();
		return false;
	} else if (theForm.cnewPassword.value == '') {
		alert('Confirm password');
		theForm.cnewPassword.focus();
		return false;
	} else if (theForm.newPassword.value != theForm.cnewPassword.value) {
		alert('New password don\'t match');
		theForm.newPassword.focus();
		return false;
	} else {
		return true;
	}
}
    </script>
    
</head>
<body>
<div id="topmain">
   




       


  </div>
<div id="body2">

<div id ="header1">
	 <img src="image/LOGO.PNG" class="LOGO" alt="logo1"/>
    <img src="image/LOGO.PNG" class="LOGO1" alt="logo2"/>
	<img src="image/d6.png" class="d6" alt="admin"/>

</div>

	<div id="navmenu">


<ul>
     <li><a href="admin.php">Home</a></li>
    
    
    
     <li><a href="#">Setting</a>
    <div class="subnav"> 
    <ul>
       
       <li> <a href="#">Manage Account</a>
        <div class="subnav1"> 
        
        <ul>
          
        <li><a href="chanpass.php">Change Password</a></li>   
        
           </ul>
        </div>
        </li> 
         </ul>
    </div>
        
       
    
 </li>
    
   
    
 </ul>


</div>
    
    
    
    
    


	


<?php

$Error="";  // Initialize Variables to Null.
$successMessage="";




if(isset($_POST['modifypass']))
{
    $oldpwd=$_POST['oldpassword'];
    $newpwd=($_POST['newpassword']);
    $cnewpwd=($_POST['cnewpassword']);
    if(empty($_POST['oldpassword'])||empty($_POST['newpassword'])||empty($_POST['cnewpassword']))
    {
        
        
       echo'  <p style="color:cyan; margin:40 20 0 20px; text-align:center; font-size:20px; font-weight:bold; text-transform:capitalize;">please fills all required fields  
!</p>';
echo' <meta content="10;chanpass.php" http-equiv="refresh" />';
        
        
    }
else{
$query="select * from account where password='{$oldpwd}'";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
    if(mysql_num_rows($result)==1){
    if($newpwd!=($cnewpwd)){
	       echo' <p class="wrong">New Password and Confirm Password does not Match!</p>';                                
		   echo'<meta content="5;chanpass.php" http-equiv="refresh" />';
		   }
    else{
        
    $sql="UPDATE account set password='{$newpwd}' where password='{$oldpwd}' " ;   
        $query=mysql_query($sql);
         echo'  <p =""> Your password has been changed successfuly!</p>';
         echo' <meta content="5;chanpass.php" http-equiv="refresh" />';  
    }
    }
    else{
        
       echo'  <p style="color:cyan; margin:40 20 0 20px; text-align:center; font-size:20px; font-weight:bold;">Wrong Old password!</p>';
      echo' <meta content="5;chanpass.php" http-equiv="refresh" />';
} 
    
}
}

    
    ?>




    
<div class="container">
<div class="main">
<h2>Welcome!</h2>
<form action="" method="post" name = "frmpassword" id = "frmpassword">
<h3>Now you can change password.</h3>
<label>Old Password :</label>
<input name="oldpassword" type="password" id = "oldpassword"><br><br>
<label>New Password :</label>
<input name="newpassword" type="password" id = "newpassword"><br><br
<label>Confirm New Password :</label>
<input name="cnewpassword" type="password" id = "cnewpassword" ><br><br>
<input name="modifypass" type="submit" value="Change Password" id = "modiftypass" onclick = "return checkpassword();">
<input name="btnCancel" type="button" class="bluebox" id="btnCancel" onClick="window.location.href='';" value="Cancel">
 <span><?php if (isset($error)) { echo $Error; } ?></span>
<span class="success"><?php if (isset($error)){echo $successMessage;} ?></span>
</form>
</div>
</div>
<div id= "footer">  copyright &copy; ASOAS yours online auction system page 2017!!All Rights Reserved 
    </div>
</div>
</body>
</html>




