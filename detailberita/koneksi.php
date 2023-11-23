<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "web_class_d";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("gagal koneksi");
}
?>