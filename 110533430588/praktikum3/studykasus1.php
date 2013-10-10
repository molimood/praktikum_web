<!--
Algoritma:
1.start
2.tampilkan combobox dan periksa index job apabila empty isi variabel $a = 'kosong' dan apabila tidak empty isi variabel $a dengan nilai dari index job
3.lakukan pengecekan kondisi $a sama dengan nilai value,jika sama option akan diseleksi,dan jika tidak sama option tidak diseleksi
4.tampilkan button submit apabila di klik akan memproses kondisi yang melakukan cek index job dan menampilkan isi dari index job
5.Finish
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Preselecting Data Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">	<!--form ditangani oleh current script & transfer data menggunakan metode POST-->
Pekerjaan
<select name="job">	<!--membuat combo box dengan nama index job-->
<option value="Mahasiswa"
<?php
if (empty($_POST['job'])){	//kondisi yang akan dilakukan saat index job bernilai empty
$a = 'Kosong';
}else{	//kondisi yang akan dilakukan saat index job tidak bernilai empty
$a = $_POST['job'];
}

if ($a == 'Mahasiswa'){	//option Mahasiswa akan terseleksi apabila variabel a = 'Mahasiswa'
echo 'selected="selected"';
}
?>
>Mahasiswa <!--membuat menu pilihan combo box dengan value Mahasiswa-->
<option value="ABRI"
<?php
if ($a == 'ABRI'){	//option Mahasiswa akan terseleksi apabila variabel a = 'ABRI'
echo 'selected="selected"';
}
?>
>ABRI <!--membuat menu pilihan combo box dengan value ABRI-->
<option value="PNS"
<?php
if ($a == 'PNS'){	//option Mahasiswa akan terseleksi apabila variabel a = 'PNS'
echo 'selected="selected"';
}
?>
>PNS <!--membuat menu pilihan combo box dengan value PNS-->
<option value="Swasta"
<?php
if ($a == 'Swasta'){	//option Mahasiswa akan terseleksi apabila variabel a = 'Swasta'
echo 'selected="selected"';
}
?>
>Swasta <!--membuat menu pilihan combo box dengan value Swasta-->
</select> <br />
<input type="submit" value="OK" /> <!--membuat Button Submit-->
</form>
<?php
if (isset($_POST['job'])){	//kondisi melakukan cek job mempunyai nilai atau tidak
echo $_POST['job'];	//mencetak isi dari index job dengan menggunakan superglobal POST
}
?>
</body>
</html>