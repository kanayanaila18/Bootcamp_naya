<?php
$nama = $_POST['nama'] ?? '';
$harga = $_POST['harga'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data</title>
</head>
<body>

<?php
if ($nama == "" || $harga == "" || $deskripsi == "") {
    echo "<h3>Data tidak boleh kosong!</h3>";
    echo "<a href='form.php'>Kembali</a>";
} else {
    echo "<h2>Data Produk</h2>";
    echo "Nama Produk : $nama <br>";
    echo "Harga       : Rp $harga <br>";
    echo "Deskripsi   : $deskripsi <br>";
}
?>

</body>
</html>
