<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("refresh:1; url=b_sign_in.php"); //to redirect back to "index.php" after logging out
exit();
?>