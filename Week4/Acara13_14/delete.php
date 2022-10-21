<?php
require('index.php');
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM user_detail WHERE id='$id'") or die(mysqli_error($conn));
header("Location:home.php");
