<!--
Algoritma:
1.start
2.tampilkan checkbox dan periksa index array hobby apabila sesuai dengan value centang checkbox
tetapi jika tidak sesuai value checkbox dikosongi/tidak dicentang
3.tampilkan button submit
4.jika submit di jalankan,lakukan pengecekan index array hobby dengan cara pengulangan dan menampung isi elemen array hobby pada variabel $val dan nomer index pada variabel $key
5.tampilkan hasil variabel $key dan $val
6.Finish
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Data CheckBox</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script & transfer data menggunakan metode POST-->
Hobby
<input type="checkbox" name="hobby[]" value="Membaca"
<?php
if (isset($_POST['hobby'])){	//kondisi melakukan cek hobby mempunyai nilai atau tidak
foreach ($_POST['hobby'] as $key => $val){	//pengulangan untuk membaca nilai array hobby
if($val == 'Membaca'){	//checkbox akan ditandai apabila 'Membaca' merupakan salah satu elemen array hobby
echo 'checked="checked"';	
}
}
}
?>
/>Membaca <!-- input berupa CheckBox -->
<input type="checkbox" name="hobby[]" value="Olahraga"
<?php
if (isset($_POST['hobby'])){	//kondisi melakukan cek hobby mempunyai nilai atau tidak
foreach ($_POST['hobby'] as $key => $val){	//pengulangan untuk membaca nilai array hobby
if($val == 'Olahraga'){	//checkbox akan ditandai apabila 'Olahraga' merupakan salah satu elemen array hobby
echo 'checked="checked"';	
}
}
}
?>
/>Olahraga <!-- input berupa CheckBox -->
<input type="checkbox" name="hobby[]" value="Menyanyi"
<?php
if (isset($_POST['hobby'])){	//kondisi melakukan cek hobby mempunyai nilai atau tidak
foreach ($_POST['hobby'] as $key => $val){	//pengulangan untuk membaca nilai array hobby
if($val == 'Menyanyi'){	//checkbox akan ditandai apabila 'Menyanyi' merupakan salah satu elemen array hobby
echo 'checked="checked"';	
}
}
}
?>
/>Menyanyi <!-- input berupa CheckBox -->
<input type="submit" value="OK" /> <!--membuat button submit -->
</form>
<?php
//Ekstraksi Nilai
if (isset($_POST['hobby'])){	//kondisi melakukan cek hobby mempunyai nilai atau tidak
foreach ($_POST['hobby'] as $key => $val){	//pengulangan untuk mendapatkan nilai array hobby dan disimpan pada variabel $val
echo $key.'->'.$val.'<br />';	//menampilkan index array dan isi array
}
}
?>
</body>
</html>