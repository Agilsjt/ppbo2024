<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

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

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}


$piring = new Lingkaran(7);
$luas_piring = $piring->luas();
$keliling_piring = $piring->keliling();
echo "Luas piring adalah " . $luas_piring . " cm²\n";
echo "Keliling piring adalah " . $keliling_piring . " cm\n";

$kelereng = new Bola(1);
$volume_kelereng = $kelereng->volume();
echo "Volume kelereng adalah " . $volume_kelereng . " cm³\n";

$toples = new Tabung(4, 12);
$volume_toples = $toples->volume();
echo "Volume toples adalah " . $volume_toples . " cm³\n";

$nasi_tumpeng = new Kerucut(4, 10);
$volume_nasi_tumpeng = $nasi_tumpeng->volume();
echo "Volume nasi tumpeng adalah " . $volume_nasi_tumpeng . " cm³\n";
