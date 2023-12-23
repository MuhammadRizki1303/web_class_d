<?php
include "../auth/koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Kelas TI_Class_D</title>

    <link rel="shortcut icon" href="../assets/img/tid.png" type="image/x-icon">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/admin.css">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-white shadow" style="background-color: #7c3aed;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">TI_Class_D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto position-relative">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin <img src="https://us.123rf.com/450wm/regara/regara2007/regara200700137/153083642-gray-avatar-picture-profil-icon-design-vector.jpg?ver=6" alt="" width="32" class="rounded">
                        </a>
                        <ul class="dropdown-menu position-absolute top-0" style="right: 480px !important;">
                            <li><a class="dropdown-item" href="#">Home</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="../auth/login-register.php">Logout</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2 px-0" style="min-height: 100vh; background-color: #ede9fe !important;">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav d-flex flex-column gap-3 py-3">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pengguna.php">Pengguna</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="anggota.php">Anggota</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active fw-bold" href="kegiatanprestasi.php">Kegiatan dan
                                        Prestasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="informasi.php">Informasi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Akhir Sidebar -->

            <!-- Content -->
            <div class="col-lg-10 p-4">
                <h5>Kegiatan dan Prestasi</h5>

                <div class="row mt-4">
                    <div class="col-md-12 mb-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalTambah">
                            Tambah Data
                        </button>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kegiatan</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $resultKegiatan = $conn->query("SELECT * FROM kegiatan");
                                if ($resultKegiatan->num_rows > 0) {
                                    while ($row = $resultKegiatan->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . $row["id_kegiatan"] . "</th>";
                                        echo "<td>" . $row["judul"] . "</td>";
                                        echo "<td>" . $row["informasi"] . "</td>";
                                        echo "<td>" . $row["tgl_isi"] . "</td>";
                                        echo "<td>
                                                <a href='proses_editt.php?id_kegiatan={$row['id_kegiatan']}'>Edit</a>
                                                <a href='#' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='setSelectedId({$row['id_kegiatan']}, null)'>Hapus</a>
                                            </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Akhir Content -->

            <!-- Content Prestasi -->
            <div class="col-lg-10 p-4">
                <h5>Prestasi</h5>

                <div class="row mt-4">
                    <div class="col-md-12 mb-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalTambah">
                            Tambah Data
                        </button>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Prestasi</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $resultPrestasi = $conn->query("SELECT * FROM prestasi");
                                if ($resultPrestasi->num_rows > 0) {
                                    while ($row = $resultPrestasi->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . $row["id_prestasi"] . "</th>";
                                        echo "<td>" . $row["judul"] . "</td>";
                                        echo "<td>" . $row["informasi"] . "</td>";
                                        echo "<td>" . $row["tgl_isi"] . "</td>";
                                        echo "<td>
                                                <a href='proses_editt.php?id_prestasi={$row['id_prestasi']}'>Edit</a>
                                                <a href='#' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='setSelectedId(null, {$row['id_prestasi']})'>Hapus</a>
                                            </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah-->
        <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kegiatan atau Prestasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="proses_tambah.php" method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" id="kategori" name="kategori" aria-label="Default select example">
                                    <option selected>-- Pilih Kategori --</option>
                                    <option value="1">Kegiatan</option>
                                    <option value="2">Prestasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="informasi" id="informasi" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Hapus -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Anda yakin?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex gap-2">
                        <button type="button" style="width: 100%;" class="btn btn-secondary d-inline" data-bs-dismiss="modal">Tidak</button>
                        <button type="button" style="width: 100%;" class="btn btn-primary" onclick="konfirmasiHapus(selectedPrestasi, selectedKegiatan)">Ya</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        var selectedKegiatan = null;
        var selectedPrestasi = null;

        function setSelectedId(kegiatanId, prestasiId) {
            selectedKegiatan = kegiatanId;
            selectedPrestasi = prestasiId;
        }

        function konfirmasiHapus() {
            // Ganti URL sesuai dengan file proses_delete.php
            var url = 'proses_delete.php?';

            if (selectedKegiatan !== null) {
                url += 'id_kegiatan=' + selectedKegiatan;
            } else if (selectedPrestasi !== null) {
                url += 'id_prestasi=' + selectedPrestasi;
            }

            window.location.href = url;
        }
    </script>


</body>

</html>