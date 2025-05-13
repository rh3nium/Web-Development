<!-- Table Joins -->

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "joins";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$q1 = "SELECT employees.id, employees.name, departments.department_name
FROM employees
LEFT JOIN departments ON employees.department_id = departments.department_id;";
$result = mysqli_query($conn, $q1);
if (mysqli_num_rows($result) > 0) {
	echo "<h2>Table Joins</h2>
	<table border='1' style='font-size: 20px; padding: 5'>
	<tr>
	<th style='padding: 5px'>ID</th>
	<th style='padding: 5px'>Employee Name</th>
	<th style='padding: 5px'>Department</th>
	</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
		          <td style='padding: 5px'>{$row['id']}</td>
		          <td style='padding: 5px'>{$row['name']}</td>
		          <td style='padding: 5px'>".($row['department_name'] ?
		          $row['department_name'] : 'No department')."</td></tr>";
	}
	echo "</table>";
} else {
	echo "No records found.";
}
mysqli_close($conn);
?>