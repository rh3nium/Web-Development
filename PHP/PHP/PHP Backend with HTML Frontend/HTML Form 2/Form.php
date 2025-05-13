<!-- Form.php -->

<?php
$conn = mysqli_connect("localhost", "root", "", "admin");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$query = "INSERT INTO form_data (name, email, message) VALUES ('$name', '$email', '$message')";
	if (mysqli_query($conn, $query)) {
		echo "Form submitted successfully";
	}
	else { echo "Error:mysqli_error($conn)"; }
}
?>
<body>
<center>
	<h1>Form</h1>
	<form method="POST">
		Name:&nbsp;<input type="text" name="name" placeholder="Your name" required><br><br>
		Email:&nbsp;<input type="email" name="email" placeholder="Your email" required><br><br>
		Message:&nbsp;<textarea style="vertical-align: top" name="message" placeholder="Your message" required></textarea><br><br>
		<input type="submit" value="Submit" style="border-radius: 10px">
	</form>
</center>
</body>
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
		background-color: aqua;
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