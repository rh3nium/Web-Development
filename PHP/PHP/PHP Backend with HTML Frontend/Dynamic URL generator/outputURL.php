<html>
<?php
$parameter1 = isset($_GET['parameter1'])?
$_GET['parameter1']:'';
$parameter2 = isset($_GET['parameter2'])?
$_GET['parameter2']:'';

$dynamic_url = "https://www.google.com/search?q=".($parameter1)."+".($parameter2);
?>
	<body>
		<h2>Your dynamically generated URL:</h2>
		<h3><a href = "<?php echo $dynamic_url;?>" target="_blank">
		<?php echo $dynamic_url;?></a></h3>
	</body>
</html>