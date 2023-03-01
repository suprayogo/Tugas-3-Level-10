<?php
require 'functions.php';


if(isset($_POST["submit"])){

    if(tambah($_POST) > 0){
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }


}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
    <h1>Tambah Data Produk</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_produk"> Nama Produk :</label>
                <input type="text" name="nama_produk" id="nama_produk" required>
            </li>
            <li>
                <label for="keterangan">Keterangan :</label>
                <input type="text" name="keterangan" id="keterangan" required>
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="jumlah">Jumlah :</label>
                <input type="text" name="jumlah" id="jumlah" required>
            </li>
            <li>
                <button type="submit" name="submit" >Tambah Data</button>
            </li>
            
        </ul>

    </form>

    </body>
</html>