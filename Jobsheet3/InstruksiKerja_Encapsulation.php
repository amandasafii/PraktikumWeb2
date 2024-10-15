<?php
// Definisi kelas Person
class Person {
    // Properti protected, hanya bisa diakses oleh kelas ini dan turunannya
    private $name;

    // Konstruktor kelas Person, menerima argumen $name dan menginisialisasi properti $name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai properti $name
    public function getName() {
        return $this->name;
    }
}

// Definisi kelas Student, turunan dari kelas Person
class Student extends Person {
    private $name;
    // Properti private untuk menyimpan ID siswa, hanya bisa diakses oleh kelas Student
    private $studentID;

    // Konstruktor kelas Student, menerima $name dan $studentID
    public function __construct($name, $studentID){
        // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi $name
        parent::__construct($name);
        $this->name = $name;
        // Menginisialisasi properti $studentID
        $this->studentID = $studentID;
    }

    // Override metode getName untuk menambahkan keterangan "Nama siswa"
    public function getName() {
        return "Nama siswa: $this->name";
    }

    // Setter untuk mengubah nilai properti $name
    public function setName($name) {
        $this->name = $name;
        return "Nama siswa: $this->name";
    }

    // Metode untuk mendapatkan ID siswa
    public function getStudentID() {
        return $this->studentID;
    }

    // Setter untuk mengubah nilai properti $studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Membuat objek dari kelas Student dengan nama "Amanda Dwi" dan ID siswa "89216824"
$student1 = new Student ("Amanda Dwi", "89216824");

// Menampilkan nama siswa dan ID siswa
echo $student1->getName() . "<br/> ID Siswa: "  . $student1->getStudentID();
echo "<br>";

?>
 