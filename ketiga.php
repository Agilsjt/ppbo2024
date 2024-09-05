<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}


$piring = new Lingkaran();
$piring->jari_jari = 7;
$luas_piring = $piring->luas();
$keliling_piring = $piring->keliling();
echo "Luas piring adalah " . $luas_piring . " cm²\n";
echo "Keliling piring adalah " . $keliling_piring . " cm\n";

$kelereng = new Bola();
$kelereng->jari_jari = 1;
$volume_kelereng = $kelereng->volume();
echo "Volume kelereng adalah " . $volume_kelereng . " cm³\n";

$toples = new Tabung();
$toples->jari_jari = 4;
$toples->tinggi = 12;
$volume_toples = $toples->volume();
echo "Volume toples adalah " . $volume_toples . " cm³\n";

$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;
$volume_nasi_tumpeng = $nasi_tumpeng->volume();
echo "Volume kerucut adalah " . $volume_nasi_tumpeng . " cm³\n";