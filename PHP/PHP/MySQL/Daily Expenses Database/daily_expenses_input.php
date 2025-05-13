<!-- daily_expenses_input.php -->

<?php
$conn = mysqli_connect("localhost", "root", "", "expenses");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST['id'];
	$type = $_POST['type'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];
	$query = "INSERT INTO form_data (id, type, amount, date) VALUES ('$id', '$type', '$amount', '$date')";
	if (mysqli_query($conn, $query)) {
		echo "Form submitted";
	}
	else { echo "Error:mysqli_error($conn)"; }
}
?><body>
<center>
	<h1>Daily Expenses</h1>
	<form method="POST">
		ID:&nbsp;<input type="number" name="id" placeholder="Expense ID" required><br><br>
		Expense Type:&nbsp;<input type="type" name="type" placeholder="Your expense type" required><br><br>
		Expense Amount:&nbsp;<input type="number" name="amount" placeholder="Your expense amount" required><br><br>
		Expense Date:&nbsp;<input type="date" name="date" required><br><br>
		<input type="submit" value="Submit" style="border-radius: 10px">
	</form>
</center>
</body>

<style>
	h1 {
		font-family: 'Courier';
		background-color: lightcoral;
		border-radius: 10%;
		box-shadow: 5px 5px 5px black;
	}
	body {
		font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';
		font-size: 22px;
		padding: 20px;
		border: 5px solid black;
		background-color: aquamarine;
	}
	input, textarea {
		font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';
		font-size: 22px;
		background-color: white;
		box-shadow: 3px 3px 3px black;
	}
	textarea:hover, input:hover {
		background-color: lightgoldenrodyellow;
	}
</style>