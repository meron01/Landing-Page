<?php 
error_reporting(0);
    $conn_db = mysql_connect("localhost","root","") or die();
    $sel_db = mysql_select_db("demo",$conn_db) or die();
    if(isset($_POST['change_pwd']))
    {
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$con_password=$_POST['con_password'];
	$chg_pwd=mysql_query("select * from users where id='1'");
	$chg_pwd1=mysql_fetch_array($chg_pwd);
	$data_pwd=$chg_pwd1['password'];
	if($data_pwd==$old_password){
	if($new_password==$con_password){
		$update_pwd=mysql_query("update users set password='$new_password' where id='1'");
		$change_pwd_error="Update Sucessfully !!!";
	 }
	 else{
 	  $change_pwd_error="Your new and Retype Password is not match !!!";
	 }
	}
    else
    {
	  $change_pwd_error="Your old password is wrong !!!";
	}}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NGZLAO</title>
<style type="text/css">
body{margin:0;padding:0;}
fieldset{width:500px; border:2px solid #333;margin:0 auto;border-radius:5px;}
dl{width:450px; float:left;}
dt{width:150px; float:left;}
dd{width:200px; float:left;}
dd input{width:200px; border:1px solid #DDD; padding:5px;}
.error{ color:#900;}
</style>
</head>

<body>
<fieldset>
<legend>Change Password</legend>
<p align="center" class="error"><?php echo $change_pwd_error ?></p>
<form method="post">
<dl><dt>Old Password</dt>
<dd><input type="password" name="old_password"  value="" required ></dd></dl>
<dl><dt>New Password</dt>
<dd><input type="password" name="new_password"  value=""  required></dd></dl>
<dl><dt>Retype New Password</dt>
<dd><input type="password" name="con_password"  value="" required ></dd></dl>
<p align="center"><input type="submit" value="Change" name="change_pwd"></p>
</form>
</fieldset>
</body>
</html>