<?php 

require_once "app/traits/Fight.php";
require_once "app/traits/Hewan.php";

class Harimau 
{
	use Hewan,
		Fight;
	public function __construct($nama = 'Harimau', $jumlahKaki = 4, $keahlian = 'lari cepat', $attackPower = 7, $defencePower = 8)
	{
		$this->nama = $nama;
		$this->jumlahKaki = $jumlahKaki;
		$this->keahlian = $keahlian;
		$this->attackPower = $attackPower;
		$this->defencePower = $defencePower;
	}	
}