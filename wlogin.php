<?php
  include("connect.php");
     session_start(); 
?>
 <?php
 if(isset($_POST['valid']))
  {
    $firstname =$_POST['firstname'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $pass=md5($password);

    $query=mysql_query("SELECT * FROM createaccount WHERE firstname='$firstname' AND password='$pass' AND role='$role'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{ 
while($row=mysql_fetch_array($query))//Fetch a result row as an associative array
{
//$roles=$row[3];     $roleno=$row[4];      $uname=$row[7];
$_SESSION['firstname']=$row['firstname'];
$_SESSION['password']=$row['password'];
if($role=="Admin")
{
echo "<script>window.open('adminhomepage.html?id=$roleno&firstname=$firstname','_self')</script>";
die();
}
else if($role=="patient")
{
echo "<script>window.open('patienthomepage.php?id=$roleno&firstname=$firstname','_self')</script>";
die();
}
else if($role=="laboratorist")
{
echo "<script>window.open('laboratoristhomepage.php?id=$roleno&firstname=$firstname','_self')</script>";
die();
}
else if($roles=="pharmacist")
{
echo "<script>window.open('pharmacisthomepage.php?id=$roleno&firstname=$firstname','_self')</script>";
die();
}
else if ($roles=="doctor") {
  echo "<script>window.open('doctorhomepahe.php?id=$roleno&firstname=$firstname','_self')</script>";
die();
}
}}
else{
$query=mysql_query("SELECT * FROM registerr WHERE firstname='$firstname' AND password='$password' AND role='$role' ");





$numrows=mysql_num_rows($query);
if($numrows!=0)
{ 
while($row=mysql_fetch_array($query))//Fetch a result row as an associative array
{
//$roles=$row[3];     $roleno=$row[4];      $uname=$row[7];
$_SESSION['firstname']=$row['firstname'];
$_SESSION['password']=$row['password'];
if($role=="patient")
{
echo "<script>window.open('patienthomepage.php?id=$roleno&firstname=$firstname','_self')</script>";
die();
}


else{
echo "<h1><font color='red'> Incorrect username, password or user Privilege. Please try again!</font></h1>";
include("wlogin.php");
die();
}}
}   
  }
//mysql_close($conn);
?>
<html>     
<head>    
<meta charset="utf-8"> 
<title>login page</title>    

</head>            
<BODY >  
<IMG border=0 alt="Fasiledes school" align=center src="bbb.jpg" width=100%  height=200 margin-top="0">
<FORM class="contact_form" action="" method="post" >     
<ul>
    <li>
             <h2>If you have an account, PLease Login First to get full school survice. Otherwise click on "Login as Guest user"</h2><br>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
      
        <li>
            <label for="name" align="right">User Name:</label>
            <input name="firstname" type="text"  placeholder="any string" required  />
      <span class="form_hint">Proper format "strings"</span>
        </li>
   <li>
            <label for="password" align="right">Password:</label>
            <input name="password" type="password"  placeholder="enter your pasword" required />
      <span class="form_hint">Proper format "xxxxxxx"</span>
        </li>
    <li>
          <button type="submit" name="valid" class="submit" width="10" value='Login'>Login</button>
          <button class="submit" type="reset" width="10" value="Reset">CLEAR</button>
        </li>
        <li>
        <a href="Guest.html"> <font size="5" color="white" >Login as Guest user</button>
        </li>
      <li>
        <a href="forgetpass.html"><font size="5" color="Red">Forget Password?</font></a>
        </li>
</ul></font><p></div>    
</body> 
</html>   </p></a></li></ul></FORM></IMG>