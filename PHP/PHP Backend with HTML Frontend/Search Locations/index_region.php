<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search by Region and Country</title>
</head>
<body>
	<h1>Search Locations</h1>
	<form action = "search_region.php" method="GET">
		<input type="text" name="query" placeholder="Enter region or country" required>
		<button type="submit" value="Submit">Search</button>
	</form>
</body>
	<style>
		input {height: 20px; width: 350px}
		button {height: 25px;}
	</style>
</html>