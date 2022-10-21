<?php
echo "STATEMENT IF ELSE<br>";
$nama = "Andi";

if ($nama == "Andi") {
    echo "Selamat Datang Andi..";
} else {
    echo "Selamat datang di politeknik Negeri Jember";
}

echo "STATEMENT SWITCH CASE<br>";

$a = 3;

if ($a == 0) {
    echo "Angka Nol";
} elseif ($a == 1) {
    echo "Angka Satu";
} elseif ($a == 2) {
    echo "Angka Dua";
} elseif ($a == 3) {
    echo "Angka Tiga";
} elseif ($a == 4) {
    echo "Angka Empat";
} elseif ($a == 5) {
    echo "Angka Lima";
} else {
    echo "Angka diluar jangkauan";
}
