<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery-1.7.2.min.js"></script>
<script>
$(document).ready(function() {
    $("#save").click(function() {
        var id = $("#id").val();
        var nama = $("#nama").val();
        var deskripsi = $("#deskripsi").val();
        var stok = $("#stok").val();
        var kategori = $("#kategori").val();
        var harga = $("#harga").val();
$.ajax({
        type:"POST",
        url:"insertProduk.php",
        data: "&id=" + id"&nama=" + nama + "&deskripsi=" + deskripsi
        + "&stok=" + stok + "&kategori=" + kategori + "&harga=" +
harga,
    success: function(data)
{ $(".info").html(data);
}
});
});
});
</script>
</head>
<body>
<a href="produk.php">Menu Produk</a>
    <table width="600" border="0" cellspacing="0"
    cellpadding="0">
<fieldset>
    <form action="updateProduk.php" method="POST">
    Nama : <input type="text" class="form-control" name="nama_2055301013" value="<?php print $produk->nama_2055301013; ?>"> <br>
    Deskripsi : <input type="text" class="form-control" name="deskripsi_2055301013" value="<?php print $produk->deskripsi_2055301013; ?>"> <br>
    Stok : <input type="text" class="form-control" name="stok_2055301013" value="<?php print$produk->stok_2055301013; ?>"> <br>
    Kategori : <input type="text" class="form-control" name="kategori_2055301013" value="<?php print $produk->kategori_2055301013; ?>"> <br>
    Harga : <input type="text" class="form-control" name="harga_2055301013" value="<?php print $produk->harga_2055301013; ?>"> <br>
    <br><input type="submit" id="save" value="Save"
/></br>
<tr>

</fieldset>
</tr>
</form>
</table>
<div class="info"></div><!—Notifikasi akan muncul di sini-->
</body>
</html>