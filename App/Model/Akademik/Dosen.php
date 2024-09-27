<?php
namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

class Dosen extends Pegawai {
    private $nidn;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar() {
        echo "{$this->nama} dengan nidn {$this->nidn} sedang mengajar perkuliahan";
    }

    public function getNidn() {
        return $this->nidn;
    }
}