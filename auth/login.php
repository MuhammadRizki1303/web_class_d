<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas TI Class D</title>

    <link rel="shortcut icon" href="assets/img/tid.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/login.css">

    <!--icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col text-center">
                <img src="../assets/img/tid.png" alt="TI Class D" height="50">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card px-2 py-1 form-login shadow-sm border-0 rounded-3">
                    <div class="card-body">
                        <?php
                        require_once('koneksi.php');
                            session_start();
                            function logout() {
                                session_unset();
                                session_destroy();
                                setcookie("user_role", "", time() - 3600, "/"); // Hapus cookie
                            }
                            
                            // Jika admin ingin logout
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {
                                logout();
                                header("Location: ../auth/login.php");
                                exit();
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Periksa apakah formulir dikirim
                                $email = $_POST["email"];
                                $password = $_POST["password"];

                                // Gantilah ini dengan kredensial pengguna aktual Anda
                                $id = 1;
                                $adminUser = "admin@gmail.com";
                                $adminPassword = "admin123";
                                $sql = "SELECT * FROM login WHERE id='$id'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    $_SESSION["user"] = "admin";
                                    header("Location: ../admin/dashboard.php");
                                    exit();
                                } else {
                                    echo "<p class='text-danger'>Username atau password salah</p>";
                                }
                            }

                            if (isset($_SESSION["user"])) {
                                if ($_SESSION["user"] == "admin") {
                                    echo "<p class='text-info'>Anda telah logout dari halaman admin. Silakan login kembali.</p>";
                                    session_unset();
                                    session_destroy();
                            }
                        }
                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control rounded-3" name="email" id="email" autofocus>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-3" name="password" id="password"
                                    required>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark bg-slate-900 rounded-3">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>