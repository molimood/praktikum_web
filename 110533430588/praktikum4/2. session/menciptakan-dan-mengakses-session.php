<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>set session</title>
</head>
<body>
<?php
//inisialisasi data session
session_start();
//set session jika belum ada
if(!isset($_SESSION['test'])){
$_SESSION['test'] = 'value';
} else {
echo 'session di-set <br />';
//mencetak nilai session test
echo 'Nilai: ' . $_SESSION['test'] . '<br />';
//mencetak semua elemen session
print_r($_SESSION);
}

?>
<p> Tekan Refresh (F5);

</body>
</html>