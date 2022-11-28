<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
echo '<table border="0"><tr>';

for ($i= 1; $i <= 7 ; $i++) { 
	echo "<tr>\n";

	for ($j = 1; $j <= 7; $j++) { 
		
		$a = $i * $j;

		echo "<td>$a</td>\n";
	}
	echo "</tr>";
}

echo "</table>";
?>
</body>
</html>