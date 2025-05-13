<!-- php_dataproc_employees.php -->

<?php
include 'db_dataproc_employees.php';
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<html>
    <head>
        <title>Employees List</title>
        <style>
            table {
                width: 97%;
                border-collapse: collapse;
                margin: 20px auto;
            }
            th, td {
                border: 1px solid black;
                padding: 4px;
                text-align: left;
            }
            th {
                background-color:rgb(0, 255, 255);
            }
        </style>
    </head>
    <body>
        <h1 style="margin: 10px">Employees List</h1>
        <table>
            <tr>
                <th>Employee Name</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Email</th>
                <th>Hire Date</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["salary"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["hire_date"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No employees found</td></tr>";
            }
            $conn -> close();
            ?>
        </table>
</html>