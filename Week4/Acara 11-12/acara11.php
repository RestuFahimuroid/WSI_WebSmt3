<?php

interface HitungLuasBangunDatar
{
    public function rumusPersegi();
    public function rumusSegitiga();
    public function rumusLingkaran();
}

class isiRumusPersegi implements HitungLuasBangunDatar
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }
    public function rumusPersegi()
    {
        return ($this->sisi * $this->sisi);
    }
    public function rumusSegitiga()
    {
    }
    public function rumusLingkaran()
    {
    }
}


class isiRumusSegitiga implements HitungLuasBangunDatar
{
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function rumusSegitiga()
    {
        return (0.5 * $this->alas * $this->tinggi);
    }

    public function rumusPersegi()
    {
    }
    public function rumusLingkaran()
    {
    }
}


class isiRumusLingkaran implements HitungLuasBangunDatar
{
    private $phi = 3.14;
    private $tinggi;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }
    public function rumusLingkaran()
    {
        return ($this->phi * $this->jari_jari * $this->jari_jari);
    }
    public function rumusPersegi()
    {
    }
    public function rumusSegitiga()
    {
    }
}


$persegi = new isiRumusPersegi(4);
echo 'Luas Persegi :' . $persegi->rumusPersegi() . "<br>";

$segitiga = new isiRumusSegitiga(20, 10);
echo 'Luas Segitiga :' . $segitiga->rumusSegitiga() . "<br>";

$lingkaran = new isiRumusLingkaran(200);
echo 'Luas Lingkaran :' . $lingkaran->rumusLingkaran() . "<br>";
