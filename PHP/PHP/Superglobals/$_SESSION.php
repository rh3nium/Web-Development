<!-- $_SESSION -->
 
<?php
session_start();
$_SESSION['username'] = "Riya";
$_SESSION['favcolor'] = "Blue";
echo "Session variables are set!";
echo "\r\n";

echo "Welcome " . $_SESSION['username'];
echo "\r\n";
echo "Your favorite color: " . $_SESSION['favcolor'];
echo "\r\n";

session_unset();
session_destroy();
echo "You are logged out";
?>