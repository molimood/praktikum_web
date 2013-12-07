<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <title>Paging Data</title>
</head>

<body>

<?php
// Memanggil file koneksi
require_once './koneksi.php';

//***************** Setup paging
// variabel sql yang berisi query
$sql = 'SELECT * FROM mahasiswa';
// Deklarasi variabel self
$self = $_SERVER['PHP_SELF'];
// Deklarasi variabel page
$page = isset($_GET['page']) ? $_GET['page'] : 0;

// Jumlah link counter, misal (prev 1 2 3 next) = 3
$link_num = 5;

// Jumlah record per halaman
$record_num = 5;

// Item pertama yang akan ditampilkan
$offset = $page ? ($page - 1) * $record_num : 0;

// Deklarasi total record
$total_rows=mysql_num_rows(mysql_query($sql));
// Deklarasi variabel query dengan isi sql
$query=$sql. ' LIMIT ' . $offset . ', ' . $record_num;
// Deklarasi variabel result yang berisi mysql_query variabel query
$result=mysql_query($query);
// Deklarasi varibel max_page dengan isi pembulatan variabel total_rows dibagi record_num
$max_page=ceil($total_rows/$record_num);

// Reset jika page tidak sesuai
if($page>$max_page || $page<=0){
        $page=1;
}

//***************** Generate paging
$paging='';

// Pengecekan apakah variabel max_page bernilai lebih dari 1
if($max_page>1){
        //*** Render link previous
        if($page>1){
                $paging .= ' <a href="'.$self.'?page='.($page-1).'">previous</a>';
        }else{
                $paging .= ' previous ';
        }

        //*** Render link counter halaman
        for($counter=1; $counter<=$max_page;$counter+=$link_num){
                if($page>=$counter){
                        $start=$counter;
                }
        }

        if($max_page>$link_num){
                $end=$start+$link_num;
                if($end>$max_page){
                        $end=$max_page+1;
                }
        }else{
                $end=$max_page;
        }

        for($counter=$start;$counter<$end;$counter++){
                if($counter==$page){
                        $paging.=$counter;
                }else{
                        $paging.=' <a href="'.$self.'?page='.$counter.'">'.$counter.'</a> ';
                }
        }

        //*** Render link next
        if($page<$max_page){
                $paging.=' <a href="'.$self.'?page='.($page+1).'">next</a> ';
        }else{
                $paging.=' next ';
        }
}
?>

<!-- Tabel untuk menampilkan hasil -->
<table border=1 cellspacing=1 cellpadding=5>
        <tr>
                <th>#</th>
                <th width=100>NIM</th>
                <th width=150>Nama</th>
                <th>Alamat</th>
        </tr>
        <?php
        // Deklarasi variabel i dengan nilai 1
        $i=1;
        // Perulangan selama terdapat record pada query
        while($row=mysql_fetch_row($result)){?>
        <tr>
                <td>
                        <!-- Menampilkan nilai variabel i -->
                        <?php echo $i;?>
                </td>
                <td>
                        <!-- Menampilkan kolom indeks ke-0 -->
                        <?php echo $row[0];?>
                </td>
                <td>
                        <!-- Menampilkan kolom indeks ke-1 -->
                        <?php echo $row[1];?>
                </td>
                <td>
                        <!-- Menampilkan kolom indeks ke-2 -->
                        <?php echo $row[2];?>
                </td>
        </tr>
        <?php
        // Increment variabel i
        $i++;
        }
        ?>
</table>

<?php

//***************** Tampilkan navigasi
echo $paging;

?>

</body>
</html>