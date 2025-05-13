<!-- php_dataproc.php -->

<?php
include 'db_dataproc_employees.php';
$sql = "SELECT * FROM tours";
$result = $conn->query($sql);
?>

<html>
    <head>
        <title>Tour List</title>
        <style>
            table {
                width: 80%;
                border-collapse: collapse;
                margin: 20px auto;
            }
            th, td {
                border: 1px solid black;
                padding: 10px;
                text-align: left;
            }
            th {
                background-color:rgb(255, 224, 224);
            }
        </style>
    </head>
    <body>
        <h1>Tour List</h1>
        <table>
            <tr>
                <th>Tour Name</th>
                <th>Location</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["location"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No tours found</td></tr>";
            }
            $conn -> close();
            ?>
        </table>
</html>