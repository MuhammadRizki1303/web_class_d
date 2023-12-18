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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
            <a class="navbar-brand text-white" href="#">IT Class D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto position-relative">
                    <li class="nav-item dropdown">
                        <a class="nav-link  d-flex align-items-center gap-2" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admin <img
                                src="https://us.123rf.com/450wm/regara/regara2007/regara200700137/153083642-gray-avatar-picture-profil-icon-design-vector.jpg?ver=6"
                                alt="" width="32" class="rounded">
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
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
                                    <a class="nav-link active fw-bold" href="anggota.php">Anggota</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="kegiatanprestasi.php">Kegiatan dan Prestasi</a>
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
                <h5>ANGGOTA</h5>

                <!-- Add your modal for adding new data -->
                <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Anggota</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="proses_simpan.php" method="post" enctype="multipart/form-data">
                                    <!-- ... -->
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">

                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan">

                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim">

                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">

                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" cols="30"
                                        rows="3"></textarea>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Continue with your table -->
                <div class="row mt-4">
                    <div class="col-md-12 mb-2">
                        <!-- Your table header and button to trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalTambah">
                            Tambah Data
                        </button>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // ...

                                $result = $conn->query("SELECT * FROM anggota");
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . $row["id_anggota"] . "</th>";
                                        echo "<td>" . $row["nama"] . "</td>";
                                        echo "<td>" . $row["jabatan"] . "</td>";
                                        echo "<td>" . $row["nim"] . "</td>";
                                        echo "<td>" . $row["alamat"] . "</td>";
                                        echo "<td>
                                                <a href='proses_edit.php?id_anggota={$row['id_anggota']}'>Edit</a>
                                                <a href='proses_hapus.php?id_anggota={$row['id_anggota']}'>Hapus</a>
                                            </td>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
                                }

                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Akhir Content -->
        </div>


        <!-- Modal Hapus-->
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $row['id_anggota']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <!-- Tambahkan kolom-kolom lain sesuai dengan struktur tabel -->
            <td>
                <form method="POST" action="proses_hapus.php">
                    <input type="hidden" name="id" value="<?php echo $row['id_anggota']; ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>