<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Largest Cities</title>
</head>
<body>
	<h1>Largest Cities</h1>
	<?php
	$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
	?>

	<?php
	for ($i = 0; $i < count($cities); $i++) { 
		echo $cities{$i} . ", ";
	}

	?>

<ul>
	<?php
	for ($i = 0; $i < count($cities); $i++) { 
		echo "<li>{$cities{$i}}</li>";
	}
	?>
</ul>
	<?php
	array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
	?>

	<?php
	sort($cities);
	?>

	<?php
	var_dump($cities);
	?>

<ul>
	<?php
	for ($i = 0; $i < count($cities); $i++) { 
		echo "<li>{$cities{$i}}</li>";
	}
	?>
</ul>
</body>
</html>