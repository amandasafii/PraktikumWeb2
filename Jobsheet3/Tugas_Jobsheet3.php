<?php
// Definisi kelas Person
class Person {
    // Properti protected, hanya bisa diakses oleh kelas ini dan turunannya
    protected $name;

    // Konstruktor kelas Person, menerima argumen $name dan menginisialisasi properti $name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai dari properti $name
    public function getName() {
        return $this->name;
    }

    // Metode untuk mendapatkan role (peran)
    public function getRole() {
        return " Role : Dosen";
    }
}

// Definisi kelas Dosen yang merupakan turunan dari Person
class Dosen extends Person {

    // Properti public untuk menyimpan NIDN (Nomor Induk Dosen Nasional)
    public $NIDN;

    // Konstruktor kelas Dosen, menerima $name dan $NIDN
    public function __construct($name, $NIDN){
        // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi $name
        parent::__construct($name);
        // Menginisialisasi properti $NIDN
        $this->NIDN = $NIDN;
    }

    // Override metode getName untuk menambahkan keterangan "Nama Dosen"
    public function getName() {
        return "Nama Dosen: " .$this->name;
    }

    // Metode untuk mendapatkan NIDN dosen
    public function getNIDN() {
        return "NIDN Dosen: " .$this->NIDN;
    }

    // Override metode getRole untuk menampilkan role sebagai "Dosen"
    public function getRole() {
        return " Role : Dosen <br>";
    }
}

// Definisi kelas Mahasiswa yang merupakan turunan dari Person
class Mahasiswa extends Person {

    // Properti public untuk menyimpan NIM (Nomor Induk Mahasiswa)
    public $NIM;

    // Konstruktor kelas Mahasiswa, menerima $name dan $NIM
    public function __construct($name, $NIM){
        // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi $name
        parent::__construct($name);
        // Menginisialisasi properti $NIM
        $this->NIM = $NIM;
    }

    // Override metode getName untuk menambahkan keterangan "Nama Mahasiswa"
    public function getName() {
        return "Nama Mahasiswa: " .$this->name;
    }

    // Metode untuk mendapatkan NIM mahasiswa
    public function getNIM() {
        return "NIM Mahasiswa: " .$this->NIM;
    }

    // Override metode getRole untuk menampilkan role sebagai "Mahasiswa"
    public function getRole() {
        return " Role : Mahasiswa";
    }
}

// Membuat objek Dosen dan Mahasiswa
$dosen1 = new Dosen("Amanda Dwi", "12682421");
$mahasiswa1 = new Mahasiswa("Windy Anggita", "1701");

// Menampilkan nama, NIDN, dan role dosen
echo $dosen1->getName();
echo "<br>";
echo $dosen1->getNIDN();
echo "<br>";
echo $dosen1->getRole();

echo "<hr>"; // Garis pembatas untuk pemisah output

// Menampilkan nama, NIM, dan role mahasiswa
echo $mahasiswa1->getName();
echo "<br>";
echo $mahasiswa1->getNIM();
echo "<br>";
echo $mahasiswa1->getRole();
echo "<br><br>";
echo "<hr>";
echo "<hr>";

// Definisi kelas abstrak Jurnal
abstract class Jurnal {
    // Metode abstrak yang harus diimplementasikan oleh kelas turunannya
    abstract public function PengajuanJurnal();
}

// Kelas JurnalDosen mengimplementasikan metode PengajuanJurnal
class JurnalDosen extends Jurnal {
    public function PengajuanJurnal() {
        return "Jurnal diajukan oleh: Dosen";
    }
}

// Kelas JurnalMahasiswa mengimplementasikan metode PengajuanJurnal
class JurnalMahasiswa extends Jurnal {
    public function PengajuanJurnal() {
        return "Jurnal ini diajukan oleh: Mahasiswa";
    }
}

// Membuat objek dari kelas JurnalDosen dan JurnalMahasiswa
$jurnaldosen1 = new JurnalDosen();
$jurnalmahasiswa1 = new JurnalMahasiswa();

// Menampilkan siapa yang mengajukan jurnal
echo $jurnaldosen1->PengajuanJurnal();
echo "<br>";
echo $jurnalmahasiswa1->PengajuanJurnal();

?>
