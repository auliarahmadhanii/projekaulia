<html>
<head>
<meta http-equiv="Content-Type"
content="text/html; charset=utf-8" />
<title>Tambah Data Mahasiswa</title>
</head>

<body>
    <?php include "koneksi.php";
    $id = $_GET['id_2055301018'];
    $query = mysqli_query($con,"SELECT * FROM
    2055301018_produk WHERE id_2055301018 = '$id'");
    $m = mysqli_fetch_object($query);
    ?>
        <a href="Produk.php">Menu Produk</a>
        <form method="POST" action="UpdateDB.php">
        <input type="hidden" value="<?php print $m->id_2055301018; ?>" name="id_2055301018" />

    
    <table width="500" border="2" cellspacing="1" cellpadding="1">
        <input type="hidden" name="id_2055301018" value="<?php print $id; ?>">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"
            value="<?php print $m->nama_2055301018; ?>" width="lOO%"
            required/></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga"
            value="<?php print $m->harga_2055301018; ?>" width="lOO%"
            required/></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td> : </td>
            <td><input type="text" name="kategori"
            value="<?php print $m->kategori_2055301018; ?>"
            width="lOO%" required/></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="deskripsi"
            value="<?php print $m->deskripsi_2055301018; ?>"
            width=" 100%" required/></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="number" name="stok"
            value="<?php print $m->stok_2055301018; ?>"
            width="100%" required/></td>
        </tr>
        <tr>
        <td colspan="3"><input type="submit" value="Save" /></td>
        </tr>
        </form>
    </table>
</body>
</html>