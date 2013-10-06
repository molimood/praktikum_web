<!DOCTYPE html>
<html>
<head>
<title>Passing By Value dan By Reference </title>
</head>
<body>
<?php
function byvalue($bilangan){
$bilangan++;
}
function byref(&$bilangan){
$bilangan++;
}

$masukan = 1;
$masukan2 = 1;
byvalue($masukan);
byref($masukan2);
echo "Nilai awal = ".$masukan."<br/>";
echo "by value = ".$masukan."<br/>";
echo "by reference = ".$masukan2;
?>
</body>
</html>