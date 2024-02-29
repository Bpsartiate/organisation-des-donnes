<?php ob_start();
session_start();
// remove all session variables
session_unset();
// destroy session
session_destroy();

header('location: index.php');

// print_r($_SESSION);
?>
