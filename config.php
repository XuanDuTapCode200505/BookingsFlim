<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "cgv_cinema";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?> 