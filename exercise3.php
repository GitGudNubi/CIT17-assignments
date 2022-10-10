<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	$a = 8;
	$b = $a + 2;
	$c = $b - 4;
	$d = $c * 5;
	$e = $d / 3;
	$f = ++$e;
	$g = --$e;

	echo "Value is now $a.";
	echo "<br>Add 2. " . "Value is now $b.";
	echo "<br>Subtract 4. " . "Value is now $c.";
	echo "<br>Multiply by 5. " . "Value is now $d.";
	echo "<br>Divide by 3. " . "Value is now $e";
	echo "<br>Increment value by one. " . "Value is now $f.";
	echo "<br>Decrement value by one. " . "Value is now $g.";
?>
</body>
</html>