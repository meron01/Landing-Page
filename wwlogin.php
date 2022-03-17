<?php
  include("connect.php");
     session_start(); 
?>
 <?php
 if(isset($_POST['submit']))
  {
    $firstname =$_POST['firstname'];
    $password=$_POST['password'];
    $pass=md5($password);

    $query=mysql_query("SELECT * FROM createaccount WHERE firstname='$firstname' AND password='$password' ");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{ 
while($row=mysql_fetch_array($query))//Fetch a result row as an associative array
{
$firstname=$row[2];     $role=$row[14];      $password=$row[5];
$_SESSION['firstname']=$row['firstname'];
$_SESSION['password']=$row['password'];
if($roles=="Admin")
{
echo "<script>window.open('adminhomepage.php?id=$role&firstname=$firstname','_self')</script>";
die();
}
else if($role=="patient")
{
echo "<script>window.open('patienthomepage.php?id=$role&firstname=$firstname','_self')</script>";
die();
}
else if($role=="laboratorist")
{
echo "<script>window.open('laboratoristhomepage.php?id=$role&firstname=$firstname','_self')</script>";
die();
}
else if($role=="pharmacist")
{
echo "<script>window.open('pharmacisthomepage.php?id=$role&firstname=$firstname','_self')</script>";
die();
}
else if ($role=="doctor") {
  echo "<script>window.open('doctorhomepage.php?id=$role&firstname=$firstname','_self')</script>";
die();
}
}}
else{
$query=mysql_query("SELECT * FROM registerr WHERE firstname='$firstname' AND password='$password' ");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
echo "<h1><font color='green'> You must create new user account</font></h1>";
include("registerr.html");
}
else{
echo "<h1><font color='red'> Incorrect username, password or user Privilege. Please try again!</font></h1>";
include("login.php");
die();
}}
}   
  //}
//mysql_close($conn);
?>
<html>     
<head>    
<meta charset="utf-8"> 
<title>login page</title>    
<link rel="stylesheet" type ="text/css" media="screen" href="login.css" >
<script type="text/javascript">
function validate()
          {
            var valid=/^[A_Za-z0_9]+$/; 
            var usernames=document.contact_form.un.value;
            var passwords=document.myfcontact_formorm.pass.value;
             if( document.contact_form.un.value == "" ||document.contact_form.pass.value == "")
              {
               alert( "Please enter Your username and password!" );
                document.contact_form.un.focus();
               return false;
              }
             else if(!valid || !valid )
                {
    alert("Username and password should contain alphanumeric character.");
     document.contact_form.un.focus();
    return false;
    }
   }     
</script>  
</head>            
<BODY >  
<IMG border=0 alt="Fasiledes school" align=center src="f.jpg" width=100%  height=200 margin-top="0">
<FORM class="contact_form" action="login.php" method="post" name="contact_form"  onsubmit="return(validate())";>     
<ul>
    <li>
             <h2>If you have an account, PLease Login First to get full school survice. Otherwise click on "Login as Guest user"</h2><br>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
      
        <li>
            <label for="name" align="right">User Name:</label>
            <input name="un" type="text"  placeholder="any string" required  />
      <span class="form_hint">Proper format "strings"</span>
        </li>
   <li>
            <label for="password" align="right">Password:</label>
            <input name="pass" type="password"  placeholder="any string" required />
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
        
<p align ="center"><font color=yellow size=4>4<sup>th</sup> year Computer science department &copy;copyright G.C. 2009E.C -All Rights Reserved 
</ul></font><p></div>    
</body> 
</html>   