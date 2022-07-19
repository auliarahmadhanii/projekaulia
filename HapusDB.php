<?php

include "koneksi.php";
$id=$_GET['id_2055301018'];
mysqli_query($con,"delete from 2055301018_produk where id_2055301018=".$id);
header("Location: Produk.php");
?>