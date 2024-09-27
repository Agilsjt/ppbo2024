


<?php

require_once 'vendor/autoload.php';
use App\Model\Akademik\Dosen;
use App\Model\Akademik\Pegawai;

$dian = new Dosen (198411132015041001, "Dian Prawira", 62111111, "Jln Purnama", 1000121184001);
echo $dian->getNidn();
echo "\n";
$dian->mengajar();

$dian=new Pegawai(198411132015041001, "Dian Prawira", 62111111, "Jln Purnama");
echo $dian->getNoHp();
