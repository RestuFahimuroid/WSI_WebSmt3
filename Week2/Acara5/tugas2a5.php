<?php
$show_time = getdate();
print_r($show_time);
echo "<br>";
echo "Sekarang Tanggal :" . $show_time["mday"] . " - " . $show_time["mon"] . " - " . $show_time["year"] . "<br>";
echo "Sekarang Jam :" . $show_time["hours"] . " - " . $show_time["minutes"] . " - " . $show_time["seconds"] . "<br>";
