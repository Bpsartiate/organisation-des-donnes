<?php ob_start();
session_start();

// Create session 
// $_SESSION['userNames'] = '<br> akim';


// Logout
// Delete Destroy Session
// session_destroy();
 if(!isset($_SESSION['userID'])){

  header("assujetti.php");

  // exit();

 }

  // header("assujetti.php");

//   // Access Session userID
//   // echo $_SESSION['userID'];

//   // echo '<br> Session Exists';

//   // echo '<pre>';
//   // print_r($_SESSION);
//   // echo '</pre>';


// endif;




// Include Init.php --> In All Pages 
# include 'init.php';


?>
