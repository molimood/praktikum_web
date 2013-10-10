<!DOCTYPE HTML>
<html>
<head><title>Login</title></head>
<body>

<?php

if (isset($_POST['Login'])){ //jika submit form Login berisi value (di klik) maka jalankan statement
    $user = $_POST['user']; // var. $user digunakan untuk menangkap data dari textfield user
    $pass = $_POST['password']; // var. $Password digunakan untuk menangkap data dari textfield password
    //uji validasi string berupa value string dari var. $user dan $pass
if($user == "user" && $pass == "user") { //jika vr. $user berisi value string "bayu" dan $password bernilai "anggara" jalankan statement
        echo"<h2>Login Sukses ... \n id : $user</h2>"; //tampilkan string berhasil login disertai dengan nama user dg cara memanggil var $user
    } else { //kondisi lain jalankan statement
        echo"<h2>Login gagal !</h2>"; //munculkan string login gagal
    }
}

?>


</body>
</html>