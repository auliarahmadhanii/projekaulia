<?php
// panggil koneksi
    include "koneksi.php";
    $id = $_POST['id_2055301018'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $con = mysqli_connect("localhost", "root", "", "2055301018_UAS");

    if (!empty($nama) && !empty($harga) && 
    !empty($kategori) && !empty($deskripsi) &&
    !empty($stok))
    //  pengecekan jika data kosong
    {
    mysqli_query($con, "UPDATE 2055301018_produk SET nama_2055301018='$nama',harga_2055301018='$harga',kategori_2055301018='$kategori',deskripsi_2055301018='$deskripsi',stok_2055301018='$stok' WHERE id_2055301018='$id'");
    header ('location:Produk.php');
    // arahkan kembali
    } else {
    header('location:Produk.php');
    echo "update gagal";
    }
?>