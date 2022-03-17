<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$oldpass = $_POST['password'];
$newpass ;
$confirmpass = $_POST['confirm_password'];
$connect=mysql_connect("localhost","root","");
if(!$connect)
{
die("error connection to db server".mysql_error());
}
$dbselect=mysql_select_db("accident", $connect);
if(!$dbselect){
die("error in selecting db ".mysql_error());
}
$query="select * from user where password='{$oldpass}' AND username='$username'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result)){
$username=$row['username'];
$password=$row['password'];}
if(!$result){
die("query faile".mysql_error());
}
 if($newpass!=$confirmpass||$username!=$username){
	       echo'  <p class="wrong">Your id, New Password and Confirm Password does not Match!</p>';                                
		   echo' <meta content="5;changepassword.php" http-equiv="refresh" />';
		   }
		   else if(strlen($newpass)<8){
		   echo'  <p class="wrong"> Password length should be more than 7!</p>';                                
		   echo' <meta content="5;changepassword.php" http-equiv="refresh" />';
		   }
		    else
		   {
  $query="update login set password='{$newpass}',	confirmpassword='{$confirmpass}' where password='{$oldpass}'";
        $result=mysql_query($query);
		 echo'  <p class="success"> Your password has been changed successfuly!</p>';
         echo' <meta content="5;changepassword.php" http-equiv="refresh" />';  
   }
}
?>