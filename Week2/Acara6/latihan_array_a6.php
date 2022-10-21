<?php
// Latihan 1 Array
echo "Latihan Array 1<br>";
$nama = array(
    1 => "Andri",
    2 => "Joko",
    3 => "Sukma",
    4 => "Rina",
    5 => "Sari"
);

//cara akses array

echo $nama[1]; //Andri
echo "<br />";
echo $nama[2]; //Joko
echo "<br />";
echo $nama[3]; //Sukma

// Latihan 2 Array

echo "<br><br>Latihan Array 2<br>";

$nama = array("Andri", "Joko", "Sukma", "Rina", "Sari");

// pengaksesan array
echo $nama[1]; //Joko
echo "<br />";
echo $nama[2]; //Sukma
echo "<br />";
echo $nama[3]; //Rina

//Latihan 3 Array
echo "<br><br>Latihan Array 3<br>";

// pembuatan array
$coba = array(
    2 => "Andri",
    "dua" => "2",
    'tiga' => 3,
    true => true,
    9 => "sembilan",
);

// pengaksesan array
echo $coba[2]; //Andri
echo "<br />";
echo $coba["dua"]; //2
echo "<br />";
echo $coba['tiga']; //3
echo "<br />";
echo $coba[true]; //1 (true di konversi menjadi 1)
echo "<br />";
echo $coba[9]; // sembilan

//Latihan 4 Array
echo "<br><br>Latihan Array 4<br>";
// pembuatan array
$nama = ["Andri", "Joko", "Sukma", "Rina", "Sari"];

// pengaksesan array
echo $nama[1]; //Joko
echo "<br />";
echo $nama[2]; //Sukma
echo "<br />";
echo $nama[3]; //Rina
