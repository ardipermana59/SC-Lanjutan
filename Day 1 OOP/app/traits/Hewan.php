<?php 


trait Hewan 
{
	public $darah = 50;

	public $nama, 
		   $jumlahKaki,
		   $keahlian;


	public function atraksi()
	{
		return $this->nama . ' sedang ' . $this->keahlian;
	}

	public function getInfoHewan()
	{
		$str = "Nama {$this->nama} </br> 
				Jumlah Kaki {$this->jumlahKaki} </br> 
				keahlian {$this->keahlian} </br> 
				Attack Power = {$this->attackPower} </br> 
				Defence Power = {$this->defencePower} </br>
				Darah {$this->darah}";
		return $str;
	}
}