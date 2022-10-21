<?php
$akar_kuadrat = sqrt(9);
echo "Akar kuadrat dari 9 adalah $akar_kuadrat <br>";

echo "12 pangkat 2 adalah : " . pow(12, 2) . "<br>";

function perkalian($angka1, $angka2)
{
    $a = $angka1;
    $b = $angka2;
    $hasil = $a * $b;
    return $hasil;
}
//Pemanggilan fungsi
$hasil = perkalian(4, 5);
echo "Perkalian adalah $hasil";
echo "<br>";
echo "Perkalian 7x2 adalah " . perkalian(7, 2) . "<br>";

//Pemanggilan fungsi
echo "Luas lingkaran dengan jari jari 7cm =" . luas_lingkaran(7) . "cm";

function luas_lingkaran($jari_jari)
{
    return M_PI * $jari_jari * $jari_jari;
}
