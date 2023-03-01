<?php
//memanggil file functions
require 'functions.php';

$produk = query("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Halaman Produk</title>
    </head>
    <body>
        <h1>Data Produk</h1>
        <a href="tambah.php">Tambah Data</a>
        <br>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Nama Produk</th>
    <th>Keterangan</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th>Aksi</th>
</tr>
<?php $i=1; ?>
<?php foreach( $produk as $row) :?>

<tr>
    <td><?= $i;?></td>
    <td><?= $row["nama_produk"];  ?></td>
    <td><?= $row["keterangan"]; ?></td>
    <td><?= $row["harga"];?></td>
    <td><?= $row["jumlah"];?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
        <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus?');">Hapus</a>
    </td>
</tr>
<?php $i++ ;?>
<?php endforeach; ?>
        </table>

    </body>
</html>