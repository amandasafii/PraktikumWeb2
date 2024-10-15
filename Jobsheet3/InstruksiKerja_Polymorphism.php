<?php
// Definisi kelas Person
class Person {
    // Properti protected, dapat diakses oleh kelas ini dan kelas turunannya
    protected $name;

    // Konstruktor kelas Person, menerima argumen $name dan menginisialisasi properti $name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai properti $name
    public function getName() {
        return $this->name;
    }
}

// Definisi kelas Student yang merupakan turunan dari kelas Person
class Student extends Person {

    // Properti public untuk menyimpan ID siswa
    public $studentID;

    // Konstruktor kelas Student, menerima $name dan $studentID
    public function __construct($name, $studentID){
        // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi $name
        parent::__construct($name);
        // Menginisialisasi properti $studentID
        $this->studentID = $studentID;
    }

    // Override metode getName untuk menambahkan keterangan "Nama siswa"
    public function getName() {
        return "Nama siswa: " .$this->name;
    }

    // Metode untuk mendapatkan ID siswa
    public function getStudentID() {
        return $this->studentID;
    }
}

// Definisi kelas Teacher yang merupakan turunan dari kelas Person
class Teacher extends Person {

    // Properti public untuk menyimpan ID guru
    public $teacherID;

    // Konstruktor kelas Teacher, menerima $name dan $teacherID
    public function __construct($name, $teacherID) {
        // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi $name
        parent::__construct($name);
        // Menginisialisasi properti $teacherID
        $this->teacherID = $teacherID;
    }

    // Override metode getName untuk menambahkan keterangan "Nama Guru"
    public function getName() {
        return "Nama Guru: " .$this->name;
    }

    // Metode untuk mendapatkan ID guru
    public function getteacherID() {
        return $this->teacherID;
    }
}

// Membuat objek dari kelas Student dengan nama "Amanda Dwi" dan ID siswa "89216824"
$student1 = new Student ("Amanda Dwi", "89216824");

// Membuat objek dari kelas Teacher dengan nama "Windy" dan ID guru "9247986"
$teacher1 = new Teacher ("Windy", "9247986");

// Menampilkan nama siswa dan ID siswa
echo $student1->getName() . " ID Siswa: "  . $student1->getStudentID();
echo "<br>";

// Menampilkan nama guru dan ID guru
echo $teacher1->getName() . " ID Guru: " . $teacher1->getteacherID();
?>
