<?php
require('connection.php');
$id = $_GET['id'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$lahir = $_POST['lahir'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];

$sql = "UPDATE `diri` 
    SET
        `nama`='$nama',
        `email`='$email',
        `lahir`='$lahir',
        `telepon`='$telepon',
        `alamat`='$alamat',
        `kelamin`='$jk' 
        WHERE `id`='$id'";
$result = $conn->query($sql);

if ($result) {
    header('Location:tabels2.php?update=success');
}
