<?php
include "../auth/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="shortcut icon" href="assets/img/tid.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.min.css">
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.min.js"></script>
    <style>
    :root {
        --bs-success-rgb: 71, 222, 152 !important;
    }

    html,
    body {
        height: 100%;
        width: 100%;
        font-family: Apple Chancery, cursive;
    }

    .btn-info.text-light:hover,
    .btn-info.text-light:focus {
        background: #000;
    }

    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: #ededed !important;
        border-style: solid;
        border-width: 1px !important;
    }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg bpy-3 mb-3 bg-transparent">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../index.html">TI-Class-D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="../home/kegiatan.php">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../home/prestasi.php">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../home/informasi.php">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="Kalender.php">Kalender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../home/youtube.php">Youtube</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../home/berita.php">Berita</a>
                    </li>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../auth/login.php">Login</a>
                    </li>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="https://sourcecodester.com">
                Sourcecodester
            </a>

            <div>
                <b class="text-light">Sample Scheduling</b>
            </div>
        </div>
    </nav>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title"
                                        id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description"
                                        id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                        name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                        name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i
                                    class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i
                                    class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit"
                            data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete"
                            data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

    <?php
    $schedules = $conn->query("SELECT * FROM `schedule_list`");
    $sched_res = [];
    foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
        $row['sdate'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
        $row['edate'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
        $sched_res[$row['id']] = $row;
    }
    ?>
    <?php
    if (isset($conn)) $conn->close();
    ?>
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
                            <i class="fa-regular fa-paper-plane me-1"></i>
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
<script>
var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="../assets/js/script.js"></script>

</html>