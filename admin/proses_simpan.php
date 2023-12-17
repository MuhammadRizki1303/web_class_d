<?php
include "../auth/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    // Upload gambar
    $targetDir = "../assets/img/";
    $gambar = basename($_FILES['gambar']['name']);
    $targetFile = $targetDir . $gambar;

    // Query untuk menyimpan data anggota
    $sqlInsert = "INSERT INTO anggota (nama, jabatan, nim, foto, alamat) VALUES (?, ?, ?, ?, ?)";
    $stmtInsert = $conn->prepare($sqlInsert);
    $stmtInsert->bind_param("sssss", $nama, $jabatan, $nim, $gambar, $alamat);

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile) && $stmtInsert->execute()) {
        // Insert berhasil
        $stmtInsert->close();
        header("Location: anggota.php");
        exit();
    } else {
        echo "Error: " . $stmtInsert->error;
    }
}