<!-- $_GET Method -->
 
<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    echo "Name: " . $_GET['name'];
    echo "\r\n";
    echo "Age: " . $_GET['age'];
}