<?php
include "../auth/koneksi.php";

// Inisialisasi variabel $data
$data = array();

// Ambil data berdasarkan ID kegiatan atau prestasi
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_kegiatan'])) {
    $id_kegiatan = $_GET['id_kegiatan'];

    $sqlSelectKegiatan = "SELECT * FROM kegiatan WHERE id_kegiatan = ?";
    $stmtSelectKegiatan = $conn->prepare($sqlSelectKegiatan);
    $stmtSelectKegiatan->bind_param("i", $id_kegiatan);
    $stmtSelectKegiatan->execute();
    $resultKegiatan = $stmtSelectKegiatan->get_result();

    if ($resultKegiatan->num_rows > 0) {
        $data = $resultKegiatan->fetch_assoc();
    } else {
        echo "Data kegiatan tidak ditemukan.";
        exit();
    }

    $stmtSelectKegiatan->close();
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_prestasi'])) {
    $id_prestasi = $_GET['id_prestasi'];

    $sqlSelectPrestasi = "SELECT * FROM prestasi WHERE id_prestasi = ?";
    $stmtSelectPrestasi = $conn->prepare($sqlSelectPrestasi);
    $stmtSelectPrestasi->bind_param("i", $id_prestasi);
    $stmtSelectPrestasi->execute();
    $resultPrestasi = $stmtSelectPrestasi->get_result();

    if ($resultPrestasi->num_rows > 0) {
        $data = $resultPrestasi->fetch_assoc();
    } else {
        echo "Data prestasi tidak ditemukan.";
        exit();
    }

    $stmtSelectPrestasi->close();
}

// Proses update data kegiatan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_kegiatan'])) {
    $id_kegiatan = $_POST['id_kegiatan'];
    $judul = $_POST['judul'];
    $informasi = $_POST['informasi'];
    $tanggal = $_POST['tanggal'];

    $sqlUpdateKegiatan = "UPDATE kegiatan SET judul=?, informasi=?, tgl_isi=? WHERE id_kegiatan=?";
    $stmtUpdateKegiatan = $conn->prepare($sqlUpdateKegiatan);
    $stmtUpdateKegiatan->bind_param("sssi", $judul, $informasi, $tanggal, $id_kegiatan);

    if ($stmtUpdateKegiatan->execute()) {
        // Update berhasil
        $stmtUpdateKegiatan->close();
        header("Location: kegiatanprestasi.php");
        exit();
    } else {
        echo "Error: " . $stmtUpdateKegiatan->error;
    }
}

// Proses update data prestasi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_prestasi'])) {
    $id_prestasi = $_POST['id_prestasi'];
    $judul = $_POST['judul'];
    $informasi = $_POST['informasi'];
    $tanggal = $_POST['tanggal'];

    $sqlUpdatePrestasi = "UPDATE prestasi SET judul=?, informasi=?, tgl_isi=? WHERE id_prestasi=?";
    $stmtUpdatePrestasi = $conn->prepare($sqlUpdatePrestasi);
    $stmtUpdatePrestasi->bind_param("sssi", $judul, $informasi, $tanggal, $id_prestasi);

    if ($stmtUpdatePrestasi->execute()) {
        // Update berhasil
        $stmtUpdatePrestasi->close();
        header("Location: kegiatanprestasi.php");
        exit();
    } else {
        echo "Error: " . $stmtUpdatePrestasi->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kegiatan dan Prestasi</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        width: 400px;
        margin: auto;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: left;
        color: #343a40;
        margin-bottom: 20px;
    }

    title {
        text-align: left;
        color: #343a40;
        margin-bottom: 20px;
        font-size: 24px;
        margin-top: 20px;
    }

    label {
        display: block;
        margin: 10px 0 5px;
        color: #343a40;
    }

    input,
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px;
        display: inline-block;
        box-sizing: border-box;
        border: 1px solid #ced4da;
        border-radius: 4px;
        background-color: #fff;
    }

    button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block;
        margin: 20px 0;
    }

    button:hover {
        background-color: #0056b3;
    }

    p {
        color: #dc3545;
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="container">
        <title>Edit Data Kegiatan dan Prestasi</title>
        <h2>Edit Data Kegiatan dan Prestasi</h2>
        <form action="" method="post">
            <?php if (!empty($data)) : ?>
            <?php if (isset($data['id_kegiatan'])) : ?>
            <input type="hidden" name="id_kegiatan" value="<?php echo $data['id_kegiatan']; ?>">
            <?php elseif (isset($data['id_prestasi'])) : ?>
            <input type="hidden" name="id_prestasi" value="<?php echo $data['id_prestasi']; ?>">
            <?php endif; ?>
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" value="<?php echo $data['judul']; ?>" required>
            <label for="informasi">Informasi:</label>
            <textarea id="informasi" name="informasi" rows="3" required><?php echo $data['informasi']; ?></textarea>
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" value="<?php echo $data['tgl_isi']; ?>" required>
            <?php if (isset($data['id_kegiatan'])) : ?>
            <input type="hidden" name="edit_kegiatan" value="1">
            <?php elseif (isset($data['id_prestasi'])) : ?>
            <input type="hidden" name="edit_prestasi" value="1">
            <?php endif; ?>
            <button type="submit">Update</button>
            <?php else : ?>
            <p>Data tidak ditemukan.</p>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>