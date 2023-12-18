<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: //localhost/web_class_d/auth/login-register.php");
    exit();
}
if (isset($_POST["logout"])) {
    // Hancurkan sesi
    session_unset();
    session_destroy();

    // Hapus cookie, jika ada
    setcookie("user", "", time() - 3600, "/"); // Ganti "user" dengan nama cookie yang digunakan

    // Redirect ke halaman login
    header("Location: //localhost/web_class_d/auth/login-register.php");
    exit();
}
