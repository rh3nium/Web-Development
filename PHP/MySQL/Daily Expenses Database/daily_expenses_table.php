<!-- daily_expenses_table.php -->

<?php
session_start();
if (isset($_SESSION['admin'])) {
	header("Location: daily_expenses_input.php");
	exit();
}
$conn = mysqli_connect("localhost", "root", "", "expenses");
$result = mysqli_query($conn, "SELECT * FROM form_data");
echo "<body><center><h1>Submitted Daily Expense Forms</h1></center>";
echo "<table border='2' style='padding:5'><tr bgcolor='lightgoldenrodyellow'><th>ID</th><th>Expense Type</th><th>Expense Amount</th><th>Date</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>
	<td>{$row['id']}</td>
	<td>{$row['type']}</td>
	<td>{$row['amount']}</td>
	<td>{$row['date']}</td>
	</tr>";
}
echo "</table></body><html>";
?>
<br>
<a href="daily_expenses_input.php">Daily Expenses Form</a>
<style>
	h1 {
		font-family: 'Courier';
		background-color: violet;
		border-radius: 10%;
		box-shadow: 5px 5px 5px black;
		margin-bottom: 25px;
	}
	body {
		padding: 20px;
		border: 5px solid black;
		background-color: aquamarine;
	}
	tr:hover {
		background-color: lightgoldenrodyellow;
	}
	table {
		font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';
		font-size: 22;
		box-shadow: 5px 5px 5px black;
	}
	a {
		font-family: 'Courier';
		font-size: 22;
	}
	a:hover {
		font-family: 'Courier';
		color: blueviolet;
	}
</style>