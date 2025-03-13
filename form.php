<?php
include 'Mahasiswa.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mahasiswa = new Mahasiswa();
    $mahasiswa->setMhs($_POST['nim'], $_POST['nama'], $_POST['programStudi']);

    echo "<h3>Data Mahasiswa</h3>";
    $data = $mahasiswa->getMhs();
    echo "NIM: " . htmlspecialchars($data['nim']) . "<br>";
    echo "Nama: " . htmlspecialchars($data['nama']) . "<br>";
    echo "Program Studi: " . htmlspecialchars($data['programStudi']) . "<br>";
    echo "</div>";
}
?>