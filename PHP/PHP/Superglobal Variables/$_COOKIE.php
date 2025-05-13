<!-- $_COOKIE Method -->
 <!-- When a user visits a website, the server sends a cookie in the response header. -->
 <!-- The browser saves the cookie and sends it with every subsequent request for the same domain. -->
 <!-- Types: Session Cookie (Deleted when browser closed), Persistent Cookie (Deleted when user logs/signs out) -->

<?php
setcookie("user", "Riya", time() + 3600,);
header("Location: Cookie Method 2.php");
?>