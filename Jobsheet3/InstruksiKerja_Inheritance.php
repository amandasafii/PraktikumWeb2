<?php
// Definisi kelas Person
class Person {
    // Properti protected, hanya bisa diakses di kelas ini dan turunannya
    protected $name;

    // Konstruktor kelas Person, menerima argumen $name dan menginisialisasi properti $name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai dari properti $name
    public function getName() {
        return $this->name;
    }
}

// Definisi kelas Student, turunan dari kelas Person
class Student extends Person {

    // Properti public yang menyimpan ID siswa
    public $studentID;

    // Konstruktor kelas Student, menerima $name dan $studentID
    public function __construct($name, $studentID){
        // Memanggil konstruktor kelas induk (Person) untuk menginisialisasi $name
        parent::__construct($name);
        // Menginisialisasi properti $studentID
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai dari properti $studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// Membuat objek dari kelas Student dengan nama "Amanda" dan ID siswa "8269649"
$student1 = new Student ("Amanda", "8269649");

// Menampilkan nama dan ID siswa
echo $student1->getName() . " ID Siswa: " . $student1->getStudentID();
?>
