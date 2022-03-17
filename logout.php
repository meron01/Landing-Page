 

<?php
require 'connect.php';
session_start();
session_destroy() ;
unset($_SESSION['role']);
unset($_SESSION['firstname']);
unset($_SESSION['password']);
echo "You have been successfully logged out";
include('login1.php');
?>
