<?php 

require_once "app/traits/Fight.php";
require_once "app/traits/Hewan.php";

class Elang 
{
	use Hewan,
		Fight;
	public function __construct($nama = 'Elang', $jumlahKaki = 2, $keahlian = 'terbang tinggi', $attackPower = 10, $defencePower = 5)
	{
		$this->nama = $nama;
		$this->jumlahKaki = $jumlahKaki;
		$this->keahlian = $keahlian;
		$this->attackPower = $attackPower;
		$this->defencePower = $defencePower;
	}
}