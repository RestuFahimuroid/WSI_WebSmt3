<?php
$nilai = 90;
echo "CONTOH IF ELSE <br>";
if ($nilai > 80) {
    echo "Selamat anda mendapatkan grade A<br>";
} else {
    echo "Maaf anda belum mendapatkan grade A";
}
echo "CONTOH SWITCH <br>";
switch ($nilai) {
    case '100':
        echo "Nilai yang di pilih 100 <br>";
        break;
    case '90':
        echo "Nilai yang di pilih 90 <br>";
        break;
}
echo "CONTOH FOR";
for ($i = 1; $i < 5; $i++) {
    echo "Looping FOR ke :" . $i . "<br>";
}
echo "CONTOH WHILE<br>";
$j = 1;
while ($j <= 5) {
    echo "Looping WHILE ke :" . $j . "<br>";
    $j++;
}
