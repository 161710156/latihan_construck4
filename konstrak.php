<?php
class siswa{

public $nama, $nis, $kelas;

public function __construct($nama, $nis, $kelas)
{
	$this->nama = $nama;
	$this->nis = $nis;
	$this->kelas = $kelas;
}

public function get_nama()
{
	return $this->nama;
}
public function get_nis()
{
	return $this->nis;
}
public function get_kelas()
{
	return $this->kelas;
}

}
?>