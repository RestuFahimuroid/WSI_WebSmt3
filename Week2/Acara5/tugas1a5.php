<?php
echo "Menentukan nilai terbsear<br>";
function nilai_maximum($x, $y)
{
    $max = $x;
    if ($y > $max) {
        $max = $y;
    }
    echo "nilai 1 :" . $x . "<br>";
    echo "nilai 2 :" . $y . "<br>";
    echo "Nilai_terbesar adalah " . $max;
}
nilai_maximum(150, 100);
