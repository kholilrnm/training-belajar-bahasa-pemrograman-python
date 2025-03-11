<?php
class Hewan {
    public $nama_hewan;
    public $suara;

    public function __construct($nama_hewan, $suara) {
        $this->nama_hewan = $nama_hewan;
        $this->suara = $suara;
    }

    public function suaraHewan() {
        return "Hewan: {$this->nama_hewan}, Suara: {$this->suara}";
    }
}

// Membuat objek Hewan
$hewan = new Hewan("sapi", "Mooo");

// Menampilkan hasil
echo "{$hewan->nama_hewan} bersuara: {$hewan->suara}\n";
echo $hewan->suaraHewan();
?>
