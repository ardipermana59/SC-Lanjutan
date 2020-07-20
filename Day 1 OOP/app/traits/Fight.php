<?php 

trait Fight
{
	public $attackPower,
		   $defencePower;

	

	public function diserang($target)
	{
		$target->darah = $target->darah - $this->attackPower / $target->defencePower;
		$str = $target->nama . ' sedang diserang';
		return $str;
	}
	public function serang($target)
	{
		$diserang = $this->diserang($target);
		$menyerang = "{$this->nama} sedang menyerang {$target->nama}";
		return $menyerang . '</br>' . $diserang;
	}
}