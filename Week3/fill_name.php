<?php include("class_lib.php"); ?>
<?php

$fahim = new person();
$Akbar = new person;

$fahim->set_name("Restu Fahim");
$Akbar->set_name("Akbar Ramadhan");

echo "Nama Lengkap Saya :" . $fahim->get_name();
echo "<br>";
echo "Nama Lengkap Teman Saya :" . $Akbar->get_name();
