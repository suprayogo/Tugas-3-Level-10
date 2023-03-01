<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data produk berdasarkan id
$pr = query ("SELECT * FROM produk WHERE id = $id")[0];





if(isset($_POST["submit"])){

    if(ubah($_POST) > 0){
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>
        ";
    }


}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ubah Data</title>
    </head>
    <body>
    <h1>Ubah Data Produk</h1>
    
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $pr["id"]; ?>">
        <ul>
            <li>
                <label for="nama_produk"> Nama Produk :</label>
                <input type="text" name="nama_produk" id="nama_produk" required value="<?= $pr["nama_produk"]; ?>">
            </li>
            <li>
                <label for="keterangan">Keterangan :</label>
                <input type="text" name="keterangan" id="keterangan" required value="<?= $pr["keterangan"]; ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required value="<?= $pr["harga"]; ?>">
            </li>
            <li>
                <label for="jumlah">Jumlah :</label>
                <input type="text" name="jumlah" id="jumlah" required value="<?= $pr["jumlah"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit" >Ubah Data</button>
            </li>
            
        </ul>

    </form>

    </body>
</html>