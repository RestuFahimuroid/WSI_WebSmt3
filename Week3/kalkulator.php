<!DOCTYPE html>

<head>
    <title> Kalkulator Menggunakan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah';
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang';
                $hasil = $bil1 - $bil2;
                break;
            case 'kali';
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi';
                $hasil = $bil1 / $bil2;
                break;
            case 'pangkat';
                $hasil = $bil1 ** $bil2;
                break;
            case 'mod';
                $hasil = $bil1 % $bil2;
                break;
        }
    }
    ?>
    <div class="kalkulator">
        <center>
            <h2 class="judul"> KALKULATOR PHP </h2>
            <form method="post" action="kalkulator.php">
                <div id="angka-saja">
                    <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukan Bilangan Pertama">
                    <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukan Bilangan Kedua">
                </div>
                <select name="operasi" id="operasi">
                    <option value="tambah">TAMBAH</option>
                    <option value="kurang">KURANG</option>
                    <option value="kali">KALI</option>
                    <option value="bagi">BAGI</option>
                    <option value="pangkat">PANGKAT</option>
                    <option value="mod">MODULUS</option>
                </select>
                <input type="submit" name="hitung" value="hitung" class="tombol">
            </form>
            <?php if (isset($_POST['hitung'])) { ?>
                <input type="text" value="<?php echo $hasil; ?>" class="bil" placeholder="Hasil Hitungan" disabled>
            <?php } else { ?>
                <input type="text" class="bil" placeholder="Hasil Hitungan" disabled>
            <?php } ?>

            <script>
                $(function() {
                    $('#angka-saja').on('keydown', '#number', function(e) {
                        -1 !== $
                            .inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/
                            .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) ||
                            35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) &&
                            (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
                    });
                })
            </script>
        </center>
        <br>
        <marquee>by RESTU FAHIMUROID. 2022</marquee>
    </div>
</body>

</html>