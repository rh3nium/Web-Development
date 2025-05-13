<!-- SESSION Method -->
 <!-- When a user visits a website, a unique session ID is created and assigned. Server-side session variables are stored here. -->

<?php
session_start();
$_SESSION['username'] = "Riya";
header("Location: SESSION Method 2.php");
?>