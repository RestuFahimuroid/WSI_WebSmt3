<?php 
	class Tablet
	{
		public $merk;
		public $camera;
		public $memory;
	}
	class PublicHandphone extends Tablet
	{
		public $handphone_baru = true;
		public $terbeli = false;
		function beli_handphone(){
			$this->terbeli = false;
		}
		function setBeli(){
			$this->terbeli = true;
		}
	}
	class PrivateHandphone extends Tablet
	{
		public $handphone_baru = true;
		public $terbeli = false;
		function beli_handphone(){
			$this->terbeli = false;
		}
		function setBeli(){
			$this->terbeli = true;
		}
	}
	class ProtectedHandphone extends Tablet
	{
		public $handphone_baru = true;
		public $terbeli = false;
		function beli_handphone(){
			$this->terbeli = false;
		}
		function setBeli(){
			$this->terbeli = true;
		}
	}
	$hp = new PublicHandphone();
	$hp->beli_handphone();
	$hp->setBeli();
	$hp->terbeli ? print_r("Hp Terbeli") : print_r("Hp Belum Terbeli");

	$hp2 = new PrivateHandphone();
	$hp2->beli_handphone();
	$hp2->setBeli();
	$hp2->terbeli ? print_r("Hp Terbeli") : print_r("Hp Belum Terbeli");

	$hp3 = new PrivateHandphone();
	$hp3->beli_handphone();
	$hp3->setBeli();
	$hp3->terbeli ? print_r("Hp Terbeli") : print_r("Hp Belum Terbeli");
 ?>