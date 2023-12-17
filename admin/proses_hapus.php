<!-- File: proses_hapus.php -->
<?php
include "../auth/koneksi.php";

// Proses hapus data anggota
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_anggota'])) {
    $id_anggota = $_GET['id_anggota'];

    $sqlDelete = "DELETE FROM anggota WHERE id_anggota=?";
    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $id_anggota);

    if ($stmtDelete->execute()) {
        // Delete berhasil
        $stmtDelete->close();
        header("Location: anggota.php");
        exit();
    } else {
        echo "Error: " . $stmtDelete->error;
    }
}

$conn->close();
?>