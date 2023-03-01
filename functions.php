<?php 
//koneksi database
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "pijarcamp";

$conn = mysqli_connect("$host", "$user", "$pass", "$db");
if(!$conn){
    die("tidak berhasil");   
}

//untuk menampilkan/query dari database
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
return $rows;

}


function tambah($data){
    global $conn;

    $nama_produk    = htmlspecialchars($data["nama_produk"]);
    $keterangan     = htmlspecialchars($data["keterangan"]);
    $harga          = htmlspecialchars($data["harga"]);
    $jumlah         = htmlspecialchars($data["jumlah"]);

    //query insert data
    $query = "INSERT INTO produk VALUES ('','$nama_produk','$keterangan','$harga','$jumlah')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id             =$data["id"];
    $nama_produk    = htmlspecialchars($data["nama_produk"]);
    $keterangan     = htmlspecialchars($data["keterangan"]);
    $harga          = htmlspecialchars($data["harga"]);
    $jumlah         = htmlspecialchars($data["jumlah"]);

    //query insert data
    $query = "UPDATE produk SET  nama_produk = '$nama_produk',
                            keterangan='$keterangan',
                            harga='$harga',
                            jumlah='$jumlah' 
                            where id='$id'
                            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}






?>