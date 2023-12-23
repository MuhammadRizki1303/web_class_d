<?php
include "../auth/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data dari form
    $gambar = isset($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : null;
    $judul = isset($_POST['judul']) ? $_POST['judul'] : null;
    $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : null;
    $informasi = isset($_POST['informasi']) ? $_POST['informasi'] : null;

    // File upload path
    $targetDir = "../assets/img/";
    $targetFilePath = $targetDir . basename($gambar);

    // Jika gambar diupload
    if (!empty($gambar) && move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFilePath)) {
        // Insert data ke kedua tabel
        $query = "INSERT INTO kegiatan (judul, foto, tgl_isi, informasi) VALUES ('$judul', '$gambar', '$tanggal', '$informasi')";
        $query .= "; INSERT INTO prestasi (judul, foto, tgl_isi, informasi) VALUES ('$judul', '$gambar', '$tanggal', '$informasi')";

        if ($conn->multi_query($query) === TRUE) {
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }

    $conn->close();
}
