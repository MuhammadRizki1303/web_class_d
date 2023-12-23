<?php
include "../auth/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_kegiatan'])) {
    $id_kegiatan = $_GET['id_kegiatan'];

    // Hapus kegiatan berdasarkan id_kegiatan
    $sqlDeleteKegiatan = "DELETE FROM kegiatan WHERE id_kegiatan=?";
    $stmtDeleteKegiatan = $conn->prepare($sqlDeleteKegiatan);
    $stmtDeleteKegiatan->bind_param("i", $id_kegiatan);

    if ($stmtDeleteKegiatan->execute()) {
        // Hapus berhasil
        $stmtDeleteKegiatan->close();
        header("Location: kegiatanprestasi.php");
        exit();
    } else {
        echo "Error: " . $stmtDeleteKegiatan->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_prestasi'])) {
    $id_prestasi = $_GET['id_prestasi'];

    // Hapus prestasi berdasarkan id_prestasi
    $sqlDeletePrestasi = "DELETE FROM prestasi WHERE id_prestasi=?";
    $stmtDeletePrestasi = $conn->prepare($sqlDeletePrestasi);
    $stmtDeletePrestasi->bind_param("i", $id_prestasi);

    if ($stmtDeletePrestasi->execute()) {
        // Hapus berhasil
        $stmtDeletePrestasi->close();
        header("Location: kegiatanprestasi.php");
        exit();
    } else {
        echo "Error: " . $stmtDeletePrestasi->error;
    }
}

$conn->close();
