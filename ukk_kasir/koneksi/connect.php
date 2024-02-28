<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "ukk_kasir";

$conn = mysqli_connect($server, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

?> 
