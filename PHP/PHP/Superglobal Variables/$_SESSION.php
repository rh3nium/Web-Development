<!-- $_SESSION -->

<?php
/* Start session */
session_start();
$_SESSION['username'] = "Riya";
$_SESSION['age'] = "31";
$_SESSION['gender'] = "Female";
$_SESSION['blood'] = "X";
$_SESSION['hair'] = "Black";
$_SESSION['nation'] = "American";

echo "Welcome " . $_SESSION['username'];
echo "\r\n";
echo "Age: " . $_SESSION['age'];
echo "\r\n";
echo "Gender: " . $_SESSION['gender'];
echo "\r\n";
echo "Blood group: " . $_SESSION['blood'];
echo "\r\n";
echo "Hair color: " . $_SESSION['hair'];
echo "\r\n";
echo "Nationality: " . $_SESSION['nation'];
echo "\r\n";

/* Clear session */
session_unset();

/* Destroy session */
function destroy_session() {
    session_destroy();
    echo "Session expired";
}
destroy_session();

?>