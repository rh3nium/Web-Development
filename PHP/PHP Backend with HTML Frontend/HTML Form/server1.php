<?php
$con = mysqli_connect("localhost", "root", "", "college");
if($con) {
    echo "Database connected" . "\r\f";
}
else {
    echo "Database not connected" . "\r\f";
}
if (isset($_POST['b1'])) {
    $id = $_POST['t1'];
    $name = $_POST['t2'];
    $age = $_POST['t3'];
    $email = $_POST['t4'];
    echo $id;
    $qr1 = "insert into student values('$id', '$name', '$age', '$email')";
    if (mysqli_query($con, $qr1)) {
        echo "Data inserted successfully.";
    }
    else {
        echo "Data not inserted.";
    }
}
elseif (isset($_POST['b2'])) {
    $qr2 = "select * from student";
    $r = mysqli_query($con, $qr2);
    echo "<table border='1'>
    <tr>
    <th>id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    </tr>";
    while ($s = mysqli_fetch_array($r)) {
        echo "<tr>
        <td>" . $s['id'] . "</td>
        <td>" . $s['name'] . "</td>
        <td>" . $s['age'] . "</td>
        <td>" . $s['email'] . "</td>
        </tr>";
    }
    echo "</table>";
}
?>