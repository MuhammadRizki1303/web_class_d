<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas TI Class D</title>

    <link rel="shortcut icon" href="../assets/img/tid.png" type="image/x-icon">

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

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
                            // Proses login
                            // Gantilah ini dengan logika login Anda
                            $email = $_POST["email"];
                            $password = $_POST["password"];
                            $sql = "SELECT * FROM login WHERE user = '$email'";
                            $result = $conn->query($sql);

                            if (!$result) {
                                die("Kesalahan kueri: " . $conn->error);
                            }

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $hashedPassword = $row["pass"];

                                if (password_verify($password, $hashedPassword)) {
                                    $_SESSION["user"] = $row["user"];

                                    if ($row["jabatan"] == "Admin") {
                                        header("Location: ../admin/dashboard.php");
                                        exit();
                                    } else {
                                        header("Location: ../index.php");
                                        exit();
                                    }
                                } else {
                                    echo "<p class='text-danger'>Username atau password salah</p>";
                                }
                            } else {
                                echo "<p class='text-danger'>Username atau password salah</p>";
                            }
                        }

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
                            // Proses registrasi
                            // Gantilah ini dengan logika registrasi Anda
                            $email = $_POST["email"];
                            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                            $jabatan = $_POST["jabatan"];

                            $sql = "INSERT INTO login (user, pass, jabatan, tgl_isi) VALUES ('$email', '$password', '$jabatan', NOW())";

                            if ($conn->query($sql) === TRUE) {
                                $registrationSuccess = "Registrasi berhasil!";
                            } else {
                                $registrationError = "Error: " . $sql . "<br>" . $conn->error;
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
                                <input type="password" class="form-control rounded-3" name="password" id="password" required>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark bg-slate-900 rounded-3" name="login">LOGIN</button>
                            </div>
                        </form>

                        <hr>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control rounded-3" name="email" id="email" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-3" name="password" id="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select rounded-3" name="jabatan" id="jabatan" required>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark bg-slate-900 rounded-3" name="register">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center mt-4">
        <!-- ... (isi footer) -->
    </footer>
    <!-- ... (script dan tag penutup HTML) -->
</body>

</html>