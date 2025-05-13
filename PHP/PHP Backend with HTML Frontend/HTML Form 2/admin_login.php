<!-- admin_login.php -->

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "admin");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * from admin_users WHERE username='$username'";
	$result = mysqli_query($conn, $query);
	$user = mysqli_fetch_assoc($result);
	
	if ($user['username']==$username && $user['password']==$password) {
		$_SESSION['admin'] = $username;
		header("Location: admin_dashboard.php");
		exit();
}
echo "Invalid username or password";
}
?><body>
<center>
	<h1>Admin Login</h1>
	<form method="POST">
		<input type="text" name="username" placeholder="username" required><br><br>
		<input type="password" name="password" placeholder="password" required><br><br>
		<input type="submit" value="Login">
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
		background-color: aquamarine;
	}
	input, textarea {
		font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';
		font-size: 22px;
		background-color: white;
		box-shadow: 3px 3px 3px black;
	}
	textarea:hover, input:hover {
		background-color: aqua;
	}
</style>