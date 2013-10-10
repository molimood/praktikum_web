<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Study Kasus 1</title>
</head>
<body>

<?php

function greet($jam) {
if ($jam >= 18 and $jam <= 24 ){
    $greeting="Selamat Malam";
   }else if ($jam >= 15 and $jam < 18 ){
    $greeting="Selamat Sore";
  }else if ($jam >= 10 and $jam < 15 ){
    $greeting="Selamat Siang";
  }else if ($jam >= 00 and $jam < 10 ){
    $greeting="Selamat Pagi";
  }else {
   $greeting="";
}
  return $greeting;
}

date_default_timezone_set('Asia/Jakarta');
$waktu = date("H");
echo '<h1>' .greet($waktu). '</h1';
echo '<br /><h3>Sekarang Jam ' .$waktu.'</h3>';


?>

</body>
</html>