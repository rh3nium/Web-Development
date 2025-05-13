<?php
$conn = mysqli_connect("localhost", "root", "", "search_example");
if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
$query = isset($_GET['query']) ? $_GET['query'] : '';
if($query) {
$sql = "SELECT * FROM locations WHERE region LIKE '%$query%' OR country LIKE '%$query%'";
$result = mysqli_query($conn, $sql);
echo "<h1>Search Results:</h1>";
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "<p><b>".$row['region']."</b> - ".$row['country']."</p>";
}
} else {
echo "<p>No results found</p>";
}
} else {
echo "<p>Please enter a search term</p>";
}
mysqli_close($conn);
?>