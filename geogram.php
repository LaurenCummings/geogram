<?php 
if(!empty($_GET['location'])) {
	$maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($_GET['location']);

	$maps_json = file_get_contents($maps_url);
}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>geogram</title>
	</head>
	<body>
		<form action="">
			<input type="text" name="location" />
			<button type="submit">submit</button>
		</form>

	</body>
	</html>