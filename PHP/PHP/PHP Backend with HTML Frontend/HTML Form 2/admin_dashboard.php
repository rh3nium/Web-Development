<!-- admin_dashboard.php -->

<?php
session_start();
if (isset($_SESSION['admin'])) {
	header("Location: admin_login.php");
	exit();
}
$conn = mysqli_connect("localhost", "root", "", "admin");
$result = mysqli_query($conn, "SELECT * FROM form_data");
echo "<center><h1>Submitted Forms</h1></center>";
echo "<body><table border='2' style='padding:5'><tr bgcolor='lightgoldenrodyellow'><th>Name</th><th>Email</th><th>Message</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>
	<td>{$row['name']}</td>
	<td>{$row['email']}</td>
	<td>{$row['message']}</td></tr>";
}
echo "</table></body><html>";
?>
<br>
<a href="logout.php">Logout</a>
<style>
	h1 {
		font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';
		background-color: lightgoldenrodyellow;
		border-radius: 10%;
		box-shadow: 5px 5px 5px black;
	}
	body {
		font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';
		font-size: 22px;
		background-color: aquamarine;
	}
	tr:hover {
		background-color: lightgoldenrodyellow;
	}
	table {
		font-size: 22;
		box-shadow: 5px 5px 5px black;
	}
	a {
		font-size: 22;
	}
	a:hover {
		color: blueviolet;
	}
</style>