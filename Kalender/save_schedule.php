<?php
include "../auth/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}

extract($_POST);
$allday = isset($allday);

// Gunakan parameterized query untuk mencegah SQL injection
$title = $conn->real_escape_string($title);
$description = $conn->real_escape_string($description);
$start_datetime = $conn->real_escape_string($start_datetime);
$end_datetime = $conn->real_escape_string($end_datetime);

if (empty($id)) {
    $sql = "INSERT INTO `schedule_list` (`title`, `description`, `start_datetime`, `end_datetime`) VALUES ('$title', '$description', '$start_datetime', '$end_datetime')";
} else {
    $sql = "UPDATE `schedule_list` SET `title` = '$title', `description` = '$description', `start_datetime` = '$start_datetime', `end_datetime` = '$end_datetime' WHERE `id` = '$id'";
}

$save = $conn->query($sql);

if ($save) {
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: " . $conn->error . "<br>";
    echo "SQL: " . $sql . "<br>";
    echo "</pre>";
}

$conn->close();
