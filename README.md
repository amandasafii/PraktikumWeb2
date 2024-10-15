# PraktikumWeb2
## <i>Object Oriented Programming</i>
OOP (Object-Oriented Programming) atau Pemrograman Berorientasi Objek adalah paradigma pemrograman yang menggunakan konsep objek dan class untuk merancang dan mengembangkan program. OOP adalah salah satu teknik pemrograman yang paling populer karena memungkinkan pengembang membuat program yang lebih modular, mudah dipelihara, dan dapat diubah dengan lebih fleksibel.

## PHP OOP-Jobsheet1 (Konsep Kelas dan Objek)

## IMPLEMENTASI KELAS
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

### 2. Membuat Constructor untuk menampung nilai dari atribut

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

-<b>Metode</b> yang digunakan yaitu :<br>
   - __construct() : Konstruktor untuk menginisialisasi objek dosen dengan atribut yang sudah dimasukkan sebelumnya.<br>
     ![image](https://github.com/user-attachments/assets/8dbd4322-5182-4875-b908-b23e140f42d0)<br>

  - tampilkanDosen() : Fungsi yang digunakan untuk menampilkan data pada class dosen.<br>
![image](https://github.com/user-attachments/assets/b3a6fdf1-60a6-4f44-ab41-9f804eb042c2)<br>

-Hasil code dari atribut dan method<br>
![image](https://github.com/user-attachments/assets/fdce1476-299f-4122-8ca1-593585df8a7b)<br>

-Hasil Output dari Class Dosen<br>
![image](https://github.com/user-attachments/assets/f359f612-c812-4367-ae04-d64859a6dac9)<br>

## PHP OOP-Jobsheet2 (Konsep Kelas dan Objek)
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


 



   

   



 

