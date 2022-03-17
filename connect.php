<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn=mysql_connect($servername, $username, $password);
if (!$conn) {
     die("could not connect to the database server.");
 }
//echo 'Server Connected successfully.';
$dbcon=mysql_select_db("login");
if(!$dbcon){
	//die("could not select database.");
}
//echo("You select valid database.");
?>