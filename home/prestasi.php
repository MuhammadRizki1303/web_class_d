<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_class_d";

// Membuat koneksi
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch achievements from the database
$query = "SELECT * FROM prestasi";
$result = $mysqli->query($query);

// Check if there are any achievements
if ($result->num_rows > 0) {
    $achievements = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $achievements = [];
}

// Close the database connection
$mysqli->close();
?><! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kelas TI-1D</title>

        <link rel="shortcut icon" href="assets/img/tid.png" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet">

        <!-- My CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!--icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- AOS Animate -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    </head>

    <body>

        <nav class="navbar navbar-expand-lg bpy-3 mb-3 bg-transparent">
            <div class="container">
                <a class="navbar-brand fw-bold" href="../index.html">TI-Class-D</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  fw-semibold" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="kegiatan.php">Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " href="prestasi.php">Prestasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold " href="informasi.php">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="../Kalender/index.php">Kalender</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="youtube.php">Youtube</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="berita.php">Berita</a>
                        </li>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <form action="../auth/login-register.php" method="post">
                                <button type="submit" class="nav-link btn btn-link">Logout</button>
                            </form>
                        </li>
                </div>
            </div>
        </nav>

        <div class="container">

            <div class="row mt-4 mb-4">
                <div class="col-md-7 mt-auto mb-3 mb-md-0">
                    <p class="text-violet-600 fw-medium mb-1 fs-5">Semua Prestasi</p>
                    <h1 class="fw-bold">Informasi Prestasi</h1>
                </div>
                <div class="col-md-5 mt-auto">
                    <form action="" method="">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control search" placeholder="Search.." name="search"
                                value="">
                            <label class="btn bg-violet-600 px-4 py-2" type="submit">
                                <i class="bi bi-search text-white"></i>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php foreach ($achievements as $achievement) : ?>
                <div class="col-12 col-md-3 col-lg-6 mb-2" data-aos="fade-right">
                    <div class="card mb-3 shadow-sm border-0" style="max-width: 550px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="position-absolute badge bg-light mx-3 my-3">
                                    <a class="text-decoration-none text-dark"
                                        href="#"><?php echo $achievement['judul']; ?></a>
                                </div>
                                <img src="<?php echo $achievement['foto']; ?>" class="p-2 rounded img-fluid"
                                    style="height:230px; width: 100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $achievement['judul']; ?></h5>
                                    <p class="card-text"><?php echo $achievement['informasi']; ?></p>
                                    <p class="card-text"><small
                                            class="text-muted"><?php echo $achievement['tgl_isi']; ?></small></p>
                                    <a href="../detailberita/detailprestasi.php?id_prestasi=<?php echo $achievement['id_prestasi']; ?>"
                                        class="btn btn-success btn-sm">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <section id="tell-us" class="tell-us mt-100 my-5">
            <div class="container p-5 bg-violet-100 rounded-10">
                <div class="row py-5 text-center justify-content-center align-items-center">
                    <div class="col-sm-6">
                        <div data-aos="fade-down" data-aos-duration="1000">
                            <p class="text-green fw-medium mb-1">Stay Connected</p>
                            <h2 class="h1 fw-bold mb-2">Keep In Touch With Us<span>.</span></h2>
                        </div>
                        <div class="input-group mt-3 shadow rounded-10" data-aos="fade-up" data-aos-duration="1000">
                            <input type="text" class="form-control py-3 px-3 border-0" placeholder="Tell us something"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary btn-cta btn-cta" type="button" id="button-addon2">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container mt-5">
            <footer class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-md-0 py-5 my-2 border-top">

                <div class="col">
                    <a href="/" class="d-flex align-items-center mb-4 link-dark text-decoration-none">
                        <h3 class="font-weight">TI-Class-D</h3>
                    </a>
                    <p class="text-muted lh-sm">Buket Rata, Lhokseumawe
                    </p>
                    <p class="text-muted lh-sm">&copy; Kelompok 3 WW</p>
                </div>

                <div class="col ms-auto">
                    <h6 class="fw-bold mb-2">Contact Us</h6>
                    <ul class="nav flex-column mb-3">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">
                                <i class="fa-regular fa-envelope me-1"></i> itoned@gmail.com
                            </a>
                        </li>
                    </ul>

                    <h6 class="fw-bold mb-2">Official Partners Website</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politeknik Negeri
                                Lhokseumawe</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknologi Informasi dan
                                Komputer</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknik Informatika</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknologi Rekayasa
                                Komputer Jaringan</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknologi Rekayasa
                                Multimedia</a></li>
                    </ul>
                </div>
            </footer>
        </div>

        <!-- Bootstrap JS -->
        <script src="../assets/js/bootstrap.min.js"></script>

        <!-- AOS Animate -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
        AOS.init();
        </script>

    </body>

    </html>