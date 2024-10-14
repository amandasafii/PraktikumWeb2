<?php

// Definisikan class Dosen
class Dosen {
    // Atribut untuk menyimpan nama dosen, NIP, dan mata kuliah yang diajarkan
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor untuk inisialisasi atribut
    // Inisialisasi objek Dosen dengan nama, NIP, dan mata kuliah yang diajarkan
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        // Mengembalikan string yang berisi informasi dosen (nama, NIP, dan mata kuliah)
        return "Nama Dosen: $this->nama, NIP: $this->nip, Mengajar: $this->mataKuliah<br>";
    }
}

// Instansiasi objek Dosen dengan nama, NIP, dan mata kuliah
$dosen1 = new Dosen("Amanda Dwi", "76553211", "Sistem Informasi Management");

// Menampilkan data dosen dengan memanggil metode tampilkanDosen
echo "<br>";
echo $dosen1->tampilkanDosen();

?>
