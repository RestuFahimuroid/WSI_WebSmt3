<?php

/**
 * Buat koneksi
 * $server = "localhost"
 * $username = "root";
 * $password = "";
 * $db = "native";
 */
$server = "localhost";
$username = "root";
$password = "";
$db = "mydts";
$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_error()) {
    echo "Koneksi gagal " . mysqli_connect_error();
}
