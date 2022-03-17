<?php
include('connect.php');
?>
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
$query="select * from registerr where password='{$oldpwd}'";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
    if(mysql_num_rows($result)==1){
    if($newpwd!=($cnewpwd)){
	       echo' <p class="wrong">New Password and Confirm Password does not Match!</p>';                                
		   echo'<meta content="5;changepassword.php" http-equiv="refresh" />';
		   }
    else{
        
    $sql="UPDATE registerr set password='{$newpwd}' where password='{$oldpwd}' " ;   
        $query=mysql_query($sql);
         echo'  <p =""> Your password has been changed successfuly!</p>';
         echo' <meta content="5;changepassword.php" http-equiv="refresh" />';  
    }
    }
    else{
        
       echo'  <p style="color:cyan; margin:40 20 0 20px; text-align:center; font-size:20px; font-weight:bold;">Wrong Old password!</p>';
      echo' <meta content="5;changepassword.php" http-equiv="refresh" />';
} 
    
}
}

    
    ?>
    <body style="background-color: #6897bb;">
<h2>Welcome!</h2>
<form action="" method="post" name = "frmpassword" id = "frmpassword">
<h3>Now you can change password.</h3>
<label>Old Password :</label>
<input name="oldpassword" type="password" id = "oldpassword"><br><br>
<label>New Password :</label>
<input name="newpassword" type="password" id = "newpassword"><br><br>
<label>Confirm New Password :</label>
<input name="cnewpassword" type="password" id = "cnewpassword" ><br><br>
<input name="modifypass" type="submit" value="Change Password" id = "modiftypass" onclick = "return checkpassword();">
<input name="btnCancel" type="button" class="bluebox" id="btnCancel" onClick="window.location.href='';" value="Cancel">
 <span><?php if (isset($error)) { echo $Error; } ?></span>
<span class="success"><?php if (isset($error)){echo $successMessage;} ?></span>
</form>
</div>
</div>
</body>
</html>



<a href="adminhomepage.php">BACK</a>
</div>
<div id= "footer">  copyright &copy;patient medical record management system 2017!!All Rights Reserved 
    </div>