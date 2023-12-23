<?php
include "../auth/koneksi.php";

// Ambil data anggota berdasarkan id_anggota
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_anggota'])) {
    $id_anggota = $_GET['id_anggota'];

    $sqlSelect = "SELECT * FROM anggota WHERE id_anggota = ?";
    $stmtSelect = $conn->prepare($sqlSelect);
    $stmtSelect->bind_param("i", $id_anggota);
    $stmtSelect->execute();
    $result = $stmtSelect->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }

    $stmtSelect->close();
}

// Proses update data anggota
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    $sqlUpdate = "UPDATE anggota SET nama=?, jabatan=?, nim=?, alamat=? WHERE id_anggota=?";
    $stmtUpdate = $conn->prepare($sqlUpdate);
    $stmtUpdate->bind_param("ssssi", $nama, $jabatan, $nim, $alamat, $id_anggota);

    if ($stmtUpdate->execute()) {
        // Update berhasil
        $stmtUpdate->close();
        header("Location: anggota.php");
        exit();
    } else {
        echo "Error: " . $stmtUpdate->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            text-align: center;
            color: #343a40;
            margin-top: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #343a40;
        }

        input {
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
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <h2>Edit Data Anggota</h2>
    <form action="" method="post">
        <input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
        <label for="jabatan">Jabatan:</label>
        <input type="text" id="jabatan" name="jabatan" value="<?php echo $data['jabatan']; ?>" required>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?php echo $data['nim']; ?>" required>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>

</html>