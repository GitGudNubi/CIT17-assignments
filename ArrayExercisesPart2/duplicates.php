<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$file = file ("textfile1.txt");

$count_values = array();
foreach ($file as $a) {

     @$count_values[$a]++;

}
echo 'Total number of duplicate elements found in the array is : '.count($count_values);
?>
</body>
</html>