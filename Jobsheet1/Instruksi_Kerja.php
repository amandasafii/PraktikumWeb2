<?php

//Mendefinisikan Class
class Mahasiswa {

    // Atribut untuk menyimpan nama, nim, dan jurusan mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi objek Mahasiswa dengan nama, nim, dan jurusan
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Fungsi untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi nama, nim, dan jurusan
        return "Nama Mahasiswa: $this->nama, NPM: $this->nim, Jurusan: $this->jurusan.<br>";
    }

    // Fungsi untuk mengubah jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        // Mengubah nilai jurusan mahasiswa dengan yang baru
        $this->jurusan = $jurusanBaru;
        return "<b>Jurusan telah diganti menjadi $this->jurusan.</b><br>";
    }

    // Fungsi untuk mengubah NIM mahasiswa
    public function setNim($nimBaru) {
        // Mengubah nilai NIM dengan yang baru
        $this->nim = $nimBaru;
        return "<b>Mengupdate NIM menjadi $this->nim.</b><br>";
    }
}

// Membuat objek Mahasiswa baru dengan nama, nim, dan jurusan
$mahasiswa1 = new Mahasiswa("Amanda Dwi", "230102050", "Komputer dan Bisnis");

// Menampilkan data mahasiswa
echo "<br>";
echo $mahasiswa1->tampilkanData();

// Mengupdate jurusan mahasiswa
echo $mahasiswa1->updateJurusan("Mesin dan Pertanian");

// Menampilkan data mahasiswa setelah jurusan diupdate
echo "<br>";
echo $mahasiswa1->tampilkanData();

// Mengupdate NIM mahasiswa
echo $mahasiswa1->setNim("230102052");

// Menampilkan data mahasiswa setelah NIM diupdate
echo "<br>";
echo $mahasiswa1->tampilkanData();

?>
