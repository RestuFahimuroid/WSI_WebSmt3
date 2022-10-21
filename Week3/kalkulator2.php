<?php
class Hitung
{
  private $x;
  private $y;
 
  public function Tambah($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x + $this->y;
    return $hasil;
  }
 
  public function Kali($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x * $this->y;
    return $hasil;
  }
 
  public function Kurang($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x - $this->y;
    return $hasil;
  }
 
  public function Bagi($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x / $this->y;
    return $hasil;
  }

  public function Modulus($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x % $this->y;
    return $hasil;
  }
  
  public function Pangkat($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x ** $this->y;
    return $hasil;
  }

  public function Tampil()
  {
    echo '<form method="POST">';
    echo '<input type="number" name="x"> &nbsp;';
   
    echo '<select name="operasi">
      <option value="tambah">+ (Tambah)</option>
      <option value="kali">x (Kali)</option>
      <option value="kurang">- (Kurang)</option>
      <option value="bagi">/ (Bagi)</option>
      <option value="modulus">% (Modulus)</option>
      <option value="pangkat">^ (Pangkat)</option>
    </select> &nbsp;';
   
    echo '<input type="number" name="y"> &nbsp;';
    echo '<label>=</label> &nbsp;';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
  }
}
 
$data = new Hitung();
$data->Tampil();
 
if ($_POST) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  if ($_POST['operasi'] == "tambah") {
    echo "<h1> Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y)." </h1> <br /><br />";
  } elseif ($_POST['operasi'] == "kali") {
    echo "<h1> Hasil ".$x." x ".$y." = ".$data->Kali($x, $y)."</h1> <br /><br />";
  } elseif ($_POST['operasi'] == "kurang") {
    echo "<h1> Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y)."</h1> <br /><br />";
  } elseif ($_POST['operasi'] == "bagi") {
    echo "<h1> Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y)."</h1> <br /><br />";
  } elseif ($_POST['operasi'] == "modulus") {
    echo "<h1> Hasil ".$x." % ".$y." = ".$data->Modulus($x, $y)."</h1> <br /><br />";
  } elseif ($_POST['operasi'] == "pangkat") {
    echo "<h1> Hasil ".$x." ^ ".$y." = ".$data->Pangkat($x, $y)."</h1> <br /><br />";
  }
}
?>
