<?php
class model_latihan1 extends CI_Model
{
	public $nilai1, $nilai2, $hasil1;
	public function jumlah($nil1= null, $nil2 = null)
	{
		# code...
		$this->nilai1 = $nil1;
		$this->nilai2 = $nil2;
		$this->hasil = $this->nilai1 + $this->nilai2;
		return $this->hasil;
	}
}