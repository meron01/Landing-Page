

<?php
require 'connect.php';	// database connect script.
session_start();//Start the tored Session
session_destroy() ;//Destroy the session by unsetting the user id and password
unset($_SESSION['firstname']);
unset($_SESSION['password']);
echo "You have been successfully logged out";
include('admin2.php');
?>