<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Generate sel tabel</title>
</head>
<body>

<?php

$sel=10;
$kolom=4;
$baris=3;
$width = $kolom * 100;
echo "<table width=".$width." border=1>";
$rows = 0;
$cel = 1;
while ($rows < $baris && $cel <= $sel){
echo "<tr>";
$col = 0;
while ($col < $kolom){
if ($cel <= $sel){
echo "<td><div align=center>".$cel."</div></td>";
$cel++;
}
$col++;
}
echo "</tr>";
$rows++;
}
echo "</table>";

?>

</body>
</html>