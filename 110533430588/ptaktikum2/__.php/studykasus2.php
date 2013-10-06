<!DOCTYPE html>
<html>
<head>
<title>Studi Kasus 2</title>
</head>
<body>

<?php
function tabel($baris, $kolom){
echo "<table border=1>";
for($i = 1; $i <=$baris; $i++){
echo "<tr height=50>";
for($j = 1; $j <=$kolom; $j++){
echo "<td width=50></td>";
}
echo "</tr>";
}
echo "</table>";
}
tabel(3,4);
?>
</body>
</html>