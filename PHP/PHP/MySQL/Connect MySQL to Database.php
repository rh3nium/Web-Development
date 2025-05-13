<!-- Connect MySQL to Database -->

<?php
$id = 113;
$name = "Riya";
$age = 30;
$email = "somerandomemail@gmail.com";

// Connect MySQL to database
$con = mysqli_connect("localhost", "root", "", "college");

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error() . "\r\f");
}
echo "Database connected succesfully. \r\f";

// Insert data into student table
$sqli = "INSERT INTO student VALUES ('$id', '$name', '$age', '$email')";
if (mysqli_query($con, $sqli)) {
    echo "Record inserted successfully. \r\f";
}
else {
    echo "Error inserting record." . mysqli_error($con) . "\r\f";
}
echo "Student Information";
echo "\r\f";

$query1 = "SELECT * FROM student";
$r = mysqli_query($con, $query1);
if ($r) {
    while ($s = mysqli_fetch_array($r)) {
        echo $s['id'] . " - " . $s['name'] . " - " . $s['age'] . " - " . $s['email'] . "\r\f";
    }
} else {
    "Error fetching records: " . mysqli_error($con);
}

mysqli_close($con);
?>