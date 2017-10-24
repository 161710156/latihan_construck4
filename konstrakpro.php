<?php

require_once 'konstrak.php';

$siswa = new siswa('iis', '121938297', '10');
echo "Nama = ".$siswa->get_nama().'<br>';
echo "NIS = ".$siswa->get_nis().'<br>';
echo "Kelas = ".$siswa->get_kelas().'<br>';
?>