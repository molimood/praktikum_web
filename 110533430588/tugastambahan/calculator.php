<html>
<head>
<title>Calkulator</title>
</head>
<body>
<form name="form1" method="post" action="calculator.php">
<p>Calculator sederhana</p>
<p>
<input name="variabel1" type="text" id="variabel1" value=""> //script untuk membuat input file
<select name="operator" id="operator"> //untuk membuat select list
<option>+</option> //untuk isi dari list
<option>-</option> //untuk isi dari list
<option>*</option> //untuk isi dari list
<option>/</option> //untuk isi dari list
</select>
<input name="variabel2" type="text" id="variabel2" value="" > //script untuk membuat input file
<input type="submit" name="Submit" value="Hitung"> //tombol perintah hitung
</form>
 
<?php
if(!empty ($_POST)) {
$variabel1 = $_POST['variabel1']; //cara ngambil data variable 1 yang tadi sudah dipost dari form
$variabel2 = $_POST['variabel2']; //cara ngambil data variable 2 yang tadi sudah dipost dari form
$operator = $_POST['operator']; //cara ngambil data operator yg dipilih yang tadi sudah dipost dari form
echo $variabel1.' '.$operator.' '.$variabel2.' = ';
if ($operator == '+') //statement if jika operator +
{
$hasil = $variabel1+$variabel2; //hasil variable 1 + variable 2 jika operator +
}
if ($operator == '-') //statement if jika operator -
{
$hasil = $variabel1-$variabel2;
}
if ($operator == '*') //statement if jika operator *
{
$hasil = $variabel1*$variabel2;
}
if ($operator == '/') //statement if jika operator /
{
$hasil = $variabel1/$variabel2;
}
print "$hasil";
}
?>
</body>
</html>
