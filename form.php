<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data yang Dimasukkan</h2>
        <?php if (!empty($nim) && !empty($nama) && !empty($alamat)): ?>
            <p><strong>NIM:</strong> <?php echo $nim; ?></p>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
        <?php else: ?>
            <p>Data tidak lengkap.</p>
        <?php endif; ?>
        <a href="index.html">Kembali</a>
    </div>
</body>
</html>
