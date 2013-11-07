<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
                <title>Halaman Administrator</title>
                <style type="text/css">
                        body{
                                background-color:#000066;
                                color:#FF0000;
                        }
                        a{
                                color:#FF0000;
                        }
                        .inner{
                                margin: 200px auto;
                                padding: 20px;
                                width:240px;
                                border:5px solid #FF0000;
                        }
                </style>
        </head>

        <body>
                <?php
                        ini_set('display errors',1);
                        define('_VALID',1);
                        //include file eksternal
                        require_once('./proses.php');
                        init_login();                //cocokkan username dan passsword dengan input
                        validate();                        //tampilkan login jika session kosong atau perintah logout jika session tidak kosong
                ?>
                <h1 style="text-align:center">Simulasi Halaman Admin</h1>
                <p style="text-align:center">
                        <a href="?m=Logout">Logout</a>
                </p>
                <div class="inner">
                        <script type="text/javascript">
                                document.location.href="../admin";
                        </script>
                        <?php
                                if($_SESSION['login']==''){                        //hapus session jika checkbox tidak dicentang
                                        unset($_SESSION['login']);
                                        session_destroy();
                                        exit;
                                }
                        ?>
                </div>
        </body>
</html>