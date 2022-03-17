<?php

session_start();
require("connect.php");

?>

<?php

$role= $_POST['role'];
$firstname=$_POST['firstname'];
$password=$_POST['password'];
$pass=md5($password);
if($firstname&& $password &&$role)
{
$query=mysql_query("SELECT * FROM createaccount WHERE role='$role' AND firstname='$firstname' AND password='$pass' ");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
while($row=mysql_fetch_assoc($query))//Fetch a result row as an associative array
{ $_SESSION['firstname']=$row['firstname'];
  
if($role=="admin")
{
  
include("adminhomepage.php");
die();
}
if($role=="pharmacist" )
{
  //$_SESSION['firstname']=$firstname;
include("pharmacisthomepage.php");
die();
}
if($role=="doctor" )
{
  //$_SESSION['firstname']=$firstname;
include("doctorhomepage.php");
die();
}
if($role=="patient" )
{
  //$_SESSION['firstname']=$firstname;
include("patienthomepage.php");
die();
}

if($role=="laboratorist" )
{
 // $_SESSION['firstname']=$firstname;
include("laboratoristhomepage.php");
die();
}
else
{
echo "This User Privilege is not found in the database. Please try again!";
header("location:login1.php");
}
}}
else

{
  echo("Please fill correct role, username and password!");
header("location:login1.php");


}}
 ?>
 <!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Responsive Login Form</title>
    </head>
<body>
<title>Responsive Login Form</title>
    
   
        <link rel="stylesheet" href="st.css">

    
    
    
  </head>

<body style ="background-color: #6897bb;">
<FORM action="login1.php" method="post">
    
<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form"><td>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/go.jpg" height="50" width="120"></td>
<h3>role:</h3>
    

<td>
<select name="role" placeholder="choose your priviledges" >
      <option value=""> </option>
      <option value="admin">Admin </option>
      <option value="patient" >patient</option>
      <option value="laboratorist">laboratorist </option>
      <option value="pharmacist">pharmacist </option>
      <option value="doctor">doctor</option>
      </select></td>
      

    <h3>Username:</h3>
    <input type="text" name="firstname" placeholder="Username"/><br>
    <h3>Password:</h3>
    <input type="password" name="password" placeholder="Password"/>
    <br>
    <div class="btn-login"><button>login</button></div>
    <br><br>
    <a class="register" a href="registerrr.html">register</a>
    
    <br>
    <a  class="forgetpassword" a href="forgetpass.html">forget password?</a>
  </div><br><br>
</div>
 

    
    
    
  </body>
</html>

 