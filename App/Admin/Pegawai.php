<?php

class Pegawai {
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn() {
        return true;
    }

    public function cekOut() {
        return true; 
    }

    public function getNoHp() {
        return $this->no_hp;
    }

    public function setNoHp($no_hp) {
        $this->no_hp = $no_hp;
    }
}

class Dosen extends Pegawai {
    public $nidn;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar() {
        echo "{$this->nama} sedang mengajar perkuliahan.\n";
    }
}

class TenagaKependidikan extends Pegawai {
    public $gaji_pokok;

    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function cuti() {
        echo "{$this->nama} sedang cuti.\n";
    }
}


$dosen = new Dosen(1234, "Budi", 628123456789, "Jl. Mawar", "123456789");
$dosen->mengajar(); 

$staff = new TenagaKependidikan(5678, "Siti", 628198765432, "Jl. Melati", 5000000);
$staff->cuti(); 
?>
