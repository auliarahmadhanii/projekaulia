<?php
include "koneksi.php";
$nama = $_POST['nama_2055301018'];
$harga = $_POST['harga_2055301018'];
$kategori = $_POST['kategori_2055301018'];
$deskripsi = $_POST['deskripsi_2055301018'];
$stok = $_POST['stok_2055301018'];

if (!empty($nama) && !empty($harga) && !empty($kategori)&& !empty($deskripsi)  && !empty($stok)  )
{
    mysqli_query($con, "INSERT INTO 2055301018_produk
    (nama_2055301018,harga_2055301018,
    kategori_2055301018,deskripsi_2055301018,stok_2055301018)
    VALUES ('$nama','$harga','$kategori','$deskripsi','$stok')");
    header('location:Produk.php');
} else 
{
    header('location:Produk.php');
}
?>