<body style="background-color: #6897bb;">


                        
<?php
session_start();
require 'connect.php';
if (isset($_POST['login'])) { 
    if(!$_POST['firstname'] | !$_POST['password']) {
        echo '<div class="w">You did not fill in a required field.';
        include('patient22.php');
        die();
    }
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['password'] = $_POST['password'];
    
$check = mysql_query("SELECT * FROM registerr WHERE firstname = '".$_SESSION['firstname']."' and password = '".$_SESSION['password']."'");
$login_check=mysql_num_rows($check);
    if ($login_check ==0)  {
            echo '<div class="w">The username or password you entered is incorrect.';
            include('patient22.php');
            die();
        }
else  {

$sql=("SELECT  firstname FROM registerr WHERE firstname = '".$_POST['firstname']."' ");
$mysql_result=mysql_query($sql);
$row=mysql_fetch_array($mysql_result);

echo '<div class="r">'.($row["firstname"].", you are logged in.".'</div>');
include('patienthomepage.php'); 

}} 
else {  
include('patient22.php');
die();
}

?>