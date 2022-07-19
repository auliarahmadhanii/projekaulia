<html>
<head>
    <title>Form Login</title>
</head>
<body> 
<?php
    include "koneksi.php";
    ?>
    <form method="POST" action="InsertDB.php" enctype="multipart/form-data">
        <fieldset>
        <legend>Isi Form</legend>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama_2055301018" placeholder="nama" />
        </p>
        <p>
            <label>Harga:</label>
            <input type="text" name="harga_2055301018" placeholder="harga" />
        </p>
        <p>
            <label>kategori:</label>
            <input type="text" name="kategori_2055301018" placeholder="kategori" />
        </p>
        <p>
            <label>deskripsi:</label>
            <input type="text" name="deskripsi_2055301018" placeholder="deskripsi" />
        </p>
        <p>
            <label>stok:</label>
            <input type="text" name="stok_2055301018" placeholder="stok" />
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</body>
</html>
</html>