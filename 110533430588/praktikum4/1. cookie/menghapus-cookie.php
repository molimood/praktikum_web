<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>hapus cookie</title>
</head>
<body>
<?php
setcookie('nama_cookie', '', time() - 3 * 3600);
if (isset($_COOKIE['nama_cookie'])){
echo 'cookie di-set <br />';
//menghapus cookie, dengan masa berlaku 3 jam yang lalu
echo 'cookie dihapus';

}else{
echo 'unset';
}
?>
<p> Tekan Refresh (F5);

</body>
</html>