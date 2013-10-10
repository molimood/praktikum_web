<!DOCTYPE html><head>

<title>Tugas Praktikum</title>
<style type="text/css">
<!--
body,td,th {
font-family: Arial, Helvetica, sans-serif;
}

</style>
<script type="text/javascript">
function validasi() { //fungsi validasi
  var user_login = form1.user.value; //var. user_login digunakan untuk mengakses value dari textbox user dari form1
  var pwd_login = form1.password.value; //var. pwd_login digunakan untuk mengakses value dari textbox password dari form1
  var valid = /^\D{4,}$/; //var. valid digunakan untuk menentukan kriteria validasi \D berarti inputan hanya boleh huruf saja sedangkan {4,} minimal inputan yang diijinkan adalah 4 dan boleh lebih
  var pesan=''; //var.pesan digunakan untuk menampung pesan kesalahan
  
  if ((pwd_login=='') && (user_login=='')) { //mengecek apakah var pwd_login dan user_login kosong
  pesan = "Username dan Password tidak boleh kosong!\n"; //jika ya maka isi var. pesan dengan string Username dan Password tidak boleh kosong"
form1.user.focus(); //fokus kursor berada pada textbox user
   }
  if (pwd_login==''){ //mengecek apakah var pwd_login kosong
   pesan = "Password tidak boleh kosong!\n"; //jika ya maka isi var. pesan dengan string Password tidak boleh kosong"
  }
  
  if (user_login==''){ //mengecek apakah var user_login kosong
  pesan ="Username tidak boleh kosong !"; //jika ya maka isi var. pesan dengan string Username tidak boleh kosong"
  }
  
  if (user_login !='' && pwd_login!='' && !user_login.match(valid)){ //mengecek jika jika var. user_login, pwd_login tidak kosong dan var. user_login tidak sesuai dengan ketentuan pada var. valid maka jalankan statment
  pesan="Username tidak valid, minimal harus berupa 4 huruf saja !";//jika ya maka isi var. pesan dengan string Username tidak valid, minimal harus berupa 4 huruf saja !"
  }
  
   if (user_login !='' && pwd_login!='' && !pwd_login.match(valid)){//mengecek jika jika var. user_login, pwd_login tidak kosong dan var. pwd_login tidak sesuai dengan ketentuan pada var. valid maka jalankan statment
  pesan="Password tidak valid, minimal harus berupa 4 huruf saja !"; //jika ya maka isi var. pesan dengan string Password tidak valid, minimal harus berupa 4 huruf saja !"
  }
  
   if (user_login !='' && pwd_login!='' && !user_login.match(valid) && !pwd_login.match(valid)){ //mengecek jika jika var. user_login, pwd_login tidak kosong, var user_login dan var. pwd_login tidak sesuai dengan ketentuan pada var. valid maka jalankan statment
  pesan="Username dan Password tidak valid, minimal harus berupa 4 huruf saja !";//jika ya maka isi var. pesan dengan string Username dan Password tidak valid, minimal harus berupa 4 huruf saja !"
  }
   if (pesan != '') { //jika var. pesan tidak kosong maka jalankan statement
            alert('Terjadi kesalahan:\n'+pesan); //memunculkan alert Terjadi kesalahan : (beserta pesan error)
return false; //kembalikan nilai salah
   }
  
 }
</script>

</head>


<link type = "text/css" rel = "stylesheet" href="stylesheetform.css"/>
<body bgcolor="#c9e6f8">

<div>
  <h1 align="center" style="color:#3b5998">Login</h1>
  <hr width="250px" color="#6badf6">
  <br />
  
  <form id="form1" name="form1" method="post" action="login.php" onSubmit="return validasi()" > <!--memanggil dan menjalankan fungsi validasi(), action login.php berarti form ini akan mengirimkan data ke form login.php-->
  <label style="font-family:'helvetica'"> Username <br />
</label>
  <input name="user" type="text" id="user" value="" size="42px"/>
  <p>
    <label style="font-family:'helvetica'">Password <br />
    <input type="text" name="password" id="password" size="42px"/>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Login" id="Login" value="Login">
    </label>
  </p>
  </form>
</div>



</body>
</html>