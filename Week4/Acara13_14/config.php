<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "userdb";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Koneksi Database Gagal.')</script>");
}
