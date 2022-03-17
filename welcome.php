<?php
session_start();
echo 'welcome'.$_SESSION['firstname'];
echo '<a href="logiinsession.php?action=Logout">Logout';
?>