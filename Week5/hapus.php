<?php
require('connection.php');
$id = $_GET['id'];
$sql = "DELETE FROM `diri` WHERE `id` = '$id'";

$result = $conn->query($sql);
if ($result) {
    header('Location:tabels2.php?delete=success');
}
