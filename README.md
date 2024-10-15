# PraktikumWeb2
# <i>Object Oriented Programming</i>
OOP (Object-Oriented Programming) atau Pemrograman Berorientasi Objek adalah paradigma pemrograman yang menggunakan konsep objek dan class untuk merancang dan mengembangkan program. OOP adalah salah satu teknik pemrograman yang paling populer karena memungkinkan pengembang membuat program yang lebih modular, mudah dipelihara, dan dapat diubah dengan lebih fleksibel.

# PHP OOP-Jobsheet1 (Konsep Kelas dan Objek)
**- Class**adalah blueprint atau template yang mendefinisikan properti (atribut) dan metode (fungsi) untuk membuat objek. Kelas tidak memiliki nilai konkret hingga objek dibuat dari kelas tersebut.<br>.
Contoh kelas dalam OOP bisa seperti Mobil, yang memiliki atribut seperti warna, jenis, dan metode seperti bergerak atau berhenti.<br><br>

**- Object**  adalah instance dari kelas, atau contoh konkret dari sebuah class, yang memiliki nilai spesifik dan bisa melakukan tindakan berdasarkan metode di dalam class.<br><br>
## <i>IMPLEMENTASI KELAS DAN OBJEK</i>
   ## <i>Instruksi Kerja-Class Mahasiswa</i>
   ### 1.Membuat kelas Mahasiswa yang memiliki atribut nama,nim, dan jurusan.<br>
   Pada class mahasiswa menggunakan atribut dan metode. 
   - <b>Atribut</b>     yang digunakan yaitu :

```php
<?php
class Mahasiswa {

    // Atribut untuk menyimpan nama, nim, dan jurusan mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
?>
```
   
   a. Nama : Mengisikan nama mahasiswa.<br>
   b. NIM : Mengisiskan Nomor Induk Mahasiswa.<br>
   c. Jurusan : Mengisikan Jurusan Mahasiswa.<br>
   
   <b>Public</b> pada atribut diatas berarti bahwa atribut memiliki akses modifier dapat dilihat/diakses oleh semua orang.<br>

### 2.Membuat metode tampilkanData().<br>
   - <b>Metode</b> yang digunakan yaitu :

```php
<?php
    // Fungsi untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi nama, nim, dan jurusan
        return "Nama Mahasiswa: $this->nama, NPM: $this->nim, Jurusan: $this->jurusan.<br>";
    }
?>
```

 ### 3.Membuat constructor.<br>
   - __construct() : Konstruktor untuk menginisialisasi objek mahasiswa dengan atribut yang sudah dimasukkan sebelumnya.

```php
<?php
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
?>
```

 ###  4. Membuat metode updateJurusan().<br>    
   - updateJurusan() : Fungsi untuk mengupdate jurusan mahasiswa.<br>

```php
<?php
    // Fungsi untuk mengubah jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        // Mengubah nilai jurusan mahasiswa dengan yang baru
        $this->jurusan = $jurusanBaru;
        return "<b>Jurusan telah diganti menjadi $this->jurusan.</b><br>";
    }
?>
```

###   5. Membuat metode setNim().<br> 
   - setNim() : Fungsi untuk mengupdate NIM Mahasiswa<br>
   
```php
<?php
  
    // Fungsi untuk mengubah NIM mahasiswa
    public function setNim($nimBaru) {
        // Mengubah nilai NIM dengan yang baru
        $this->nim = $nimBaru;
        return "<b>Mengupdate NIM menjadi $this->nim.</b><br>";
    }
?>
```

### 6. Instansiasi Class Mahasiswa <br>

```php
<?php
// Menampilkan data mahasiswa
echo "<br>";
echo $mahasiswa1->tampilkanData();
?>
```

### 7. Instansiasi Class Mahasiswa untuk mengubah data <br>

```php
<?php
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
```

- Hasil code dari atribut dan method<br>
![image](https://github.com/user-attachments/assets/15af0401-ac6a-402e-ac3b-0c9f17a9a2dc)<br>
![image](https://github.com/user-attachments/assets/784ca73c-c8c4-4b7d-ba6a-4b770ed21b15)<br>

- Hasil Output dari Class Mahasiswa<br>
![image](https://github.com/user-attachments/assets/cd6116d7-bb38-4747-8fe3-8cd83f9d62fc)<br>

## <i>Tugas -Class Dosen</i><br>

### 1. Membuat Class Dosen dengan atribut Nama, NIP, dan mataKuliah.
Pada class dosen menggunakan atribut dan metode. 
- <b>Atribut</b> yang digunakan yaitu :<br>

```php
<?php
// Definisikan class Dosen
class Dosen {
    // Atribut untuk menyimpan nama dosen, NIP, dan mata kuliah yang diajarkan
    public $nama;
    public $nip;
    public $mataKuliah;
?>
```

a. Nama : Menginputkan nama Dosen.<br>
b. NIP : Mengisikan nomor Dosen.<br>
c. matakuliah : Mengisikan mata kuliah yang diampu oleh dosen.<br>

### 2. Membuat Constructor untuk menampung nilai dari atribut<br>

 - __construct() : Konstruktor untuk menginisialisasi objek dosen dengan atribut yang sudah dimasukkan sebelumnya.<br>
 
```php
<?php
    // Constructor untuk inisialisasi atribut
    // Inisialisasi objek Dosen dengan nama, NIP, dan mata kuliah yang diajarkan
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
?>
```

 - <b>Public</b> pada atribut diatas berarti bahwa atribut memiliki akses modifier dapat dilihat/diakses oleh semua orang.<br>

### 3. Membuat metode tampilkanDosen() untuk menampilkan informasi dosen.<br>

  - tampilkanDosen() : Fungsi yang digunakan untuk menampilkan data pada class dosen.<br>

```php
<?php
       // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        // Mengembalikan string yang berisi informasi dosen (nama, NIP, dan mata kuliah)
        return "Nama Dosen: $this->nama, NIP: $this->nip, Mengajar: $this->mataKuliah<br>";
    }
}

?>
```

### 4.Instansiasi Class Dosen.<br>

```php
<?php
$dosen1 = new Dosen("Amanda Dwi", "76553211", "Sistem Informasi Management");

// Menampilkan data dosen dengan memanggil metode tampilkanDosen
echo "<br>";
echo $dosen1->tampilkanDosen();
?>
```

- Hasil code dari atribut dan method<br>
![image](https://github.com/user-attachments/assets/fdce1476-299f-4122-8ca1-593585df8a7b)<br>

- Hasil Output dari Class Dosen<br>
![image](https://github.com/user-attachments/assets/f359f612-c812-4367-ae04-d64859a6dac9)<br><br>

# PHP OOP-Jobsheet2 (Konsep Kelas dan Objek)
- Class adalah Blueprint/cetakan untuk menciptakan suatu objek. Dalam kata lain Class merupakan sekumpulan dari Objek.
- Object merupakan instansiasi dari class yang menjadi satu kesatuan dalam class, yang memegangi atribut dan method. Object merupakan hasil cetakan dari sebuah class.<br>
- Prinsip OOP meliputi :<br>
  -Encapsulation<br>
  Encapsulation bertujuan untuk membungkus data (atribut) dan fungsi (metode) menjadi satu kesatuan dalam sebuah kelas, serta menyembunyikan detail implementasi dari dunia luar.<br><br>
  -Inheritance<br>
  Inheritance adalah konsep yang memungkinkan sebuah kelas mewarisi sifat-sifat (atribut dan metode) dari kelas lain. <br><br>
  -Polymorphism<br>
   Polymorphism memungkinkan suatu objek untuk mengambil berbagai bentuk. Dengan kata lain, satu metode yang sama bisa memiliki perilaku yang berbeda, tergantung dari objek yang memanggilnya.<br><br>
  -Abstraction<br>
  Abstraction adalah konsep yang menyederhanakan kompleksitas dengan hanya menampilkan fitur penting dari sebuah objek dan menyembunyikan detail implementasi.<br>

## a. Instruksi Kerja<br>
### 1. Membuat Class dan Object<br>


   - Membuat class Mahasiswa yang memiliki atribut nama, nim dan jurusan :<br>
   
```php
<?php
   class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;
?>
 ```
   - Membuat metode tampilkanData() dalam class mahasiswa :<br>
```php
<?php
    // Constructor untuk menginisialisasi atribut Mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data Mahasiswa
    public function tampilData() {
        return "Nama mahasiswa: $this->nama <br>
        NIM: $this->nim <br>
        Jurusan: $this->jurusan.<br><hr>";
    }
?>
 ```
     
   - Instansiasi Objek dari class Mahasiswa : <br>
```php
<?php
 // Instansiasi 
echo "<h2>Membuat Class dan Object</h2>";
$mahasiswa1 = new Mahasiswa("Celline", "12345678", "Rekayasa Mesin dan Pertanian");
echo $mahasiswa1->tampilData();
?>
 ```
   - Tampilan/Output data Mahasiswa :<br>
![image](https://github.com/user-attachments/assets/108e6f0d-6723-4d63-aef3-f7d25e4c3810)<br><br>

### 2. Encapsulation<br>

   - Mengubah atribut dalam class mahasiswa menjadi private : <br>
   
```php
<?php

// Class Mahasiswa 
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;
?>
 ```

   - Membuat metode getter dan setter untuk atribut pada class Mahasiswa : <br>
   
```php
<?php
 // Metode untuk menampilkan data Mahasiswa
    public function tampilData() {
        return "Nama mahasiswa: $this->nama <br>
        NIM: $this->nim <br>
        Jurusan: $this->jurusan.<br><hr>";
    }

    // Metode getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Metode setter untuk mengupdate atribut nama
    public function setNama($namaBaru) {
        $this->nama = $namaBaru;
        return "Nama Mahasiswa telah diubah menjadi <b>$this->nama</b>";
    }

    // Metode getter untuk atribut NIM
    public function getNim() {
        return $this->nim;
    }

    // Metode setter untuk mengupdate atribut NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
        return "NIM Mahasiswa telah diubah menjadi <b>$this->nim</b>";
    }

    // Metode getter untuk atribut Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Metode setter untuk mengupdate atribut Jurusan
    public function setJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
        return "Jurusan Mahasiswa telah diubah menjadi <b>$this->jurusan</b>";
    }
}
?>
 ```

   - Mendemonstrasikan akses ke atribut melalui
metode getter dan setter : <br>
```
php
<?php
// Mengubah nama mahasiswa (Encapsulation)
echo "<h2>Encapsulation</h2>";
$mahasiswa1->setNama("Lily");
echo $mahasiswa1->tampilData();

// Mengubah NIM mahasiswa (Encapsulation)
$mahasiswa1->setNim("098754");
echo $mahasiswa1->tampilData();

// Mengubah jurusan mahasiswa (Encapsulation)
$mahasiswa1->setJurusan("Mesin");
echo $mahasiswa1->tampilData();
echo "<br>";

?>
 ```

   - Tampilan?Output Encapsulation : <br>
![image](https://github.com/user-attachments/assets/b15119e1-608c-4b8d-bd59-901defe279b9)

### 3. Inheritance<br>

   - Membuat class Pengguna dengan atribut nama dan metode getNama() : <br>
   
```php
<?php
// Class Pengguna sebagai Parent untuk Inheritance
class Pengguna {
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }
}

?>
```

   - Membuat class Dosen yang mewarisi atribut pada class pengguna dan menambhakan atribut mataKuliah() : <br>

```php
<?php
// Class Dosen yang mewarisi class Pengguna (Inheritance)
class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk menginisialisasi atribut Dosen
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor dari kelas Pengguna
        $this->mataKuliah = $mataKuliah;
    }

    // Getter untuk atribut Mata Kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    // Metode untuk menampilkan data Dosen
    public function tampilDataDosen() {
        return "Nama Dosen: $this->nama <br>
        Mata Kuliah: $this->mataKuliah.<br><hr>";
    }
}


?>
```

  - Instansiasi objek dari class Dosen : <br>

```php
<?php
// instansiasi Inheritance
echo "<h2>Inheritance</h2>";
$dosen1 = new Dosen("Cella", "Matematika Diskrit");
echo $dosen1->tampilDataDosen();
echo "<hr>";
?>
```

  - Tampilan data Dosen : <br>
  ![image](https://github.com/user-attachments/assets/3b0f6b4a-1cda-4d03-bd94-c66a6b8b5f26)<br><br>

### 4. Polymorphism<br>

   - Membuat class pengguna dengan metode aksesFitur() : <br>

 ```php
<?php
// Class Polymorphism dasar
class Pengguna_Poly {
    public function aksesFitur() {
        return "Akses Fitur";
    }
}
?>
```

   - Menginmplementasikan aksesFitur ke class Dosen dan Mahasiswa dengan cara berbeda : <br>

```php
<?php
// Class Mahasiswa_Poly mewarisi Pengguna_Poly dan menerapkan Polymorphism
class Mahasiswa_Poly extends Pengguna_Poly {
    private $nama = "Mahasiswa";
    private $nim = "123456";
    private $jurusan = "Teknik";

    public function aksesFitur() {
        return "Mahasiswa $this->nama dengan nim $this->nim dan jurusan $this->jurusan dapat mengakses web SIA.<br>";
    }
}

// Class Dosen_Poly mewarisi Pengguna_Poly dan menerapkan Polymorphism
class Dosen_Poly extends Pengguna_Poly {
    private $nama = "Dosen";
    private $mataKuliah = "Pemrograman";

    public function aksesFitur() {
        return "Dosen $this->nama mengampu mata kuliah $this->mataKuliah dapat mengakses dan mengedit web SIA.<br>";
    }
}
?>
```

   - Instansiasi objek dari class Dosen dan Mahasiswa dan pemanggilan aksesFitur : <br>

```php
<?php
echo "<h2>Polymorphism</h2>";
$mahasiswaPoly = new Mahasiswa_Poly();
echo $mahasiswaPoly->aksesFitur();

$dosenPoly = new Dosen_Poly();
echo $dosenPoly->aksesFitur();
?>
```

   - Tampilan/Output :<br>
     ![image](https://github.com/user-attachments/assets/ebbdcbfc-3096-434c-b228-54d2f0a800da)<br><br>

### 5. Abstraction<br>

   - Membuat class Abstract Pengguna dengan metode abstract aksesFitur() : <br>

```php
<?php
// Abstraction dengan Class Abstract
abstract class Pengguna_Abstract {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function aksesFitur(); // Abstract method untuk Polymorphism
}
?>
```

   - Mengimplementasikan class Dosen dan Mahasiswa : <br>

```php
<?php
// Class Mahasiswa2 menerapkan Abstraction
class Mahasiswa2 extends Pengguna_Abstract {
    public function aksesFitur() {
        return $this->nama . ", Sedang mengakses fitur mahasiswa: Mengikuti Study-Jams.<br>";
    }
}

// Class Dosen2 menerapkan Abstraction
class Dosen2 extends Pengguna_Abstract {
    public function aksesFitur() {
        return $this->nama . ", Sedang mengakses fitur Dosen: Mengajar Study-Jams.<br>";
    }
}
?>
```

  - Instansiasi objek dengan memanggil aksesFitur() : <br>

```php
<?php
// Instansiasi Abstraction
echo "<h2>Abstraction</h2>";
$mahasiswa2 = new Mahasiswa2("Beyonce");
echo $mahasiswa2->aksesFitur();

$dosen2 = new Dosen2("Feast");
echo $dosen2->aksesFitur();
?>
```

  - Tampilan/Output <br>
    ![image](https://github.com/user-attachments/assets/7458fe62-7265-477d-a493-8e1737c05eda)<br>

- Hasil Coding lengkap : <br><br>
![image](https://github.com/user-attachments/assets/2de97037-116d-4fc2-a161-02e8849b5ed1)<br>
![image](https://github.com/user-attachments/assets/f0217042-db80-4854-a2a3-a124b729028f)<br>
![image](https://github.com/user-attachments/assets/cd6b6334-2ba0-476f-847a-81e284740ceb)<br>
![image](https://github.com/user-attachments/assets/e4316e1f-34ae-458d-9dca-b4a89aded25b)<br>
![image](https://github.com/user-attachments/assets/b8e35568-b478-4ffa-a141-61488e588e21)<br>

# PHP OOP-Jobsheet3  (Konsep Kelas dan Objek)
## IMPLEMENTASI KONSEP INHERITANCE, ENCAPSULATION, POLYMORPHISM, dan ABSTRACTION dalam PHP
## <i>Instruksi Kerja</i><br>

### 1). Inheritance
- Membuat class Person dengan atribut name dan metode getName():<br>

```php
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
?>
```

- Membuat class Student yangb mewarisi dari class Person, dan menambahkan atribut StudentID serta metode getStudent():<br>

```php
<?php
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
?>
```

- Instansiasi class Student yangb mewarisi dari class Person, dan menambahkan atribut StudentID serta metode getStudent():<br>

```php
<?php
// Membuat objek dari kelas Student dengan nama "Amanda" dan ID siswa "8269649"
$student1 = new Student ("Amanda", "8269649");

// Menampilkan nama dan ID siswa
echo $student1->getName() . " ID Siswa: " . $student1->getStudentID();
?>
```

- Hasil semua Coding class Inheritance : <br><br>
![image](https://github.com/user-attachments/assets/35a0174e-d2f2-47c6-af4b-93a1184bebad)<br>
![image](https://github.com/user-attachments/assets/0557c68b-1ceb-4ddb-96fb-2137bae2ad17)<br>



- Tampilan Output dari Inheritance : <br>
![image](https://github.com/user-attachments/assets/1b72acf5-620a-4d24-a5e8-93a6b1b348e6)<br><br>

### 2). Polymorphism<br>

- Membuat Class Teacher yang mewarisi dari Class Person serta menambahkan atribut TeacherID():<br>

```php
<?php
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

?>
```

- Meng-Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda:<br>

```php
<?php
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
?>
```

- Instansiasi Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda : <br>

```php
<?php
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
```
- Hasil semua Coding class Polymorphism: <br><br>
![image](https://github.com/user-attachments/assets/201603c6-2c9e-4937-a51d-b6ec2ab288e5)
<br>
![image](https://github.com/user-attachments/assets/eb3b0973-857e-4772-b6da-ee57e40a7630)
<br><br>
- Tampilan Output Polymorphism : <br><br>

![image](https://github.com/user-attachments/assets/2ce24d64-5878-4f0b-b40f-0fd35b154059)<br><br>

### 3). Encapsulation<br>

- Mengubah atribut name dan StudentID dalam kelas Student menjadi private:<br>

```php
<?php
// Definisi kelas Student, turunan dari kelas Person
class Student extends Person {

    // Properti private untuk menyimpan ID siswa, hanya bisa diakses oleh kelas Student
    private $studentID;

    // Konstruktor kelas Student, menerima $name dan $studentID
    public function __construct($name, $studentID){
        // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi $name
        parent::__construct($name);
        // Menginisialisasi properti $studentID
        $this->studentID = $studentID;
    }
?>
```

- Menambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan StudentID:<br>

```php
<?php

    // Override metode getName untuk menambahkan keterangan "Nama siswa"
    public function getName() {
        return "Nama siswa: " .$this->name;
    }

    // Setter untuk mengubah nilai properti $name
    public function setName($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan ID siswa
    public function getStudentID() {
        return $this->studentID;
    }

    // Setter untuk mengubah nilai properti $studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
?>
```

- Instansiasi metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan StudentID:<br>

```php
<?php
// Membuat objek dari kelas Student dengan nama "Amanda Dwi" dan ID siswa "89216824"
$student1 = new Student ("Amanda Dwi", "89216824");

// Menampilkan nama siswa dan ID siswa
echo $student1->getName() . " ID Siswa: "  . $student1->getStudentID();
echo "<br>";
?>
```

- Hasil semua Coding class Encapsulation: <br><br>
![image](https://github.com/user-attachments/assets/acfa107a-5e5b-4b40-8302-fb7cfbcb6d15)
<br>
![image](https://github.com/user-attachments/assets/a21a19c0-26f9-49ca-a6c2-cca0490f6717)
<br><br>
- Tampilan Output Encapsulation : <br><br>
![image](https://github.com/user-attachments/assets/b4cdd367-2d21-4ad5-8021-79d5ab5c7b82)<br><br>

### 4). Abstracttion<br>

- Membuat class Abstrak Course dengan metode abstrak getCourseDetails() : <br>

```php
<?php
abstract class Course {
    
    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}
?>
```

- Membuat class OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() untuk memberikan detail yang berbeda : <br>

```php
<?php
// Kelas OnlineCourse mengimplementasikan getCourseDetails()
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Ini adalah Kursus Online";
    }
}

// Kelas OfflineCourse mengimplementasikan getCourseDetails()
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Ini adalah Kursus Offline ";
    }
}
?>
```

- Instansi class OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() : <br>

```php
<?php
// Membuat objek dari kelas OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse("DIP");
$offlineCourse = new OfflineCourse("Matdiss");

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails();
echo "<br>";
echo $offlineCourse->getCourseDetails();

?>
```

- Hasil semua Coding class Abstraction: <br><br>
![image](https://github.com/user-attachments/assets/fd79e8ab-a814-4caa-945c-141efd391767)
<br><br>
- Tampilan Output Class Abstraction : <br>
![image](https://github.com/user-attachments/assets/7b54b1af-9440-47d2-b971-44ff56b47b01)<br><br>

## <i>Tugas</i><br>
### 1). Mengimplementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.<br>

```php
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
?>
```

### 2). Menggunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.<br>

```php
<?php
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
?>
```

### 3). Menggunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim dikelas Mahasiswa..<br>

```php
<?php
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
}// Definisi kelas Dosen yang merupakan turunan dari Person
class Dosen extends Person {

    // Properti public untuk menyimpan NIDN (Nomor Induk Dosen Nasional)
    private $NIDN;

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
    private $NIM;

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
?>
```

### 4). Menggunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim dikelas Mahasiswa..<br>

```php
<?php
// Definisi kelas Dosen yang merupakan turunan dari Person
class Dosen extends Person {

    // Properti public untuk menyimpan NIDN (Nomor Induk Dosen Nasional)
    private $NIDN;

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
    private $NIM;

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
?>
```
**- Instansiasi :<br>**

```php
<?php
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
?>
```

**- Tampilan Coding lengkap : <br>**
![image](https://github.com/user-attachments/assets/9ee8fd4d-d6e7-46ff-9d96-5c985e2a0211)<br>
![image](https://github.com/user-attachments/assets/63ed8d0e-71dc-43dd-a786-1408c0ab0f91)<br>
![image](https://github.com/user-attachments/assets/565ccad9-f527-4a7e-a77e-f99c1be99c7d)
<br><br>
**- Tampilan Output : <br>**
![image](https://github.com/user-attachments/assets/3a3eafae-603d-4e14-9fba-ca0c697aa0ad)<br><br>

### 5). Membuat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.<br>

```php
<?php
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
```

**- Tampilan Coding lengkap : <br>**
![image](https://github.com/user-attachments/assets/5f6cfe5e-2f2d-483e-b65d-05481f8b19f5)<br>

**- Tampilan Output : <br>**
![image](https://github.com/user-attachments/assets/0b0d6937-bbe9-4850-847d-5d8ddf3827b2)

