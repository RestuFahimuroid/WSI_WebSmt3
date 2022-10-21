<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil()
{
    echo "Selamat Anda Berhasil";
}
function gagal()
{
    echo "Maaf Anda Gagal";
}

$nilai = 90;
if ($nilai = 90) {
    berhasil();
} else {
    gagal();
}

echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";

function jumlah($a, $b)
{
    return $a + $b;
}

$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1, $nilai2);
echo "<br>";
echo "Fungsi Bawaan<br>";
$sekarang = getdate();
print_r($sekarang);
echo "<br>";
echo "Sekarang Tanggal :" . $sekarang["mday"];
