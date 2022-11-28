<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$a = file ("textfile3.txt");
$oddArray = array();
$evenArray = array();
$size = count($a);
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($a[$i] % 2 == 0) {
        $evenArray[$j] = $a[$i];
        $j++;
    } else {
        $oddArray[$k] = $a[$i];
        $k++;
    }
}
error_reporting(E_ERROR | E_PARSE);
echo "The Even elements are : <br>";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
echo "<br>The Odd elements are : <br>";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>
</body>
</html>