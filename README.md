## PraktikumWeb2
### <i>Object Oriented Programming</i>
OOP (Object-Oriented Programming) atau Pemrograman Berorientasi Objek adalah paradigma pemrograman yang menggunakan konsep objek dan class untuk merancang dan mengembangkan program. OOP adalah salah satu teknik pemrograman yang paling populer karena memungkinkan pengembang membuat program yang lebih modular, mudah dipelihara, dan dapat diubah dengan lebih fleksibel.

### 1. PHP OOP-Jobsheet1 (Konsep Kelas dan Objek)

<b>a. Instruksi Kerja</b>
   #### <i>Class Mahasiswa</i>
   Pada class mahasiswa menggunakan atribut dan metode. 
   -<b>Atribut</b>     yang digunakan yaitu :
   ![image](https://github.com/user-attachments/assets/c6c8eca0-a289-43af-b53f-eb51623a3e43)
   
   a. Nama : Mengisikan nama mahasiswa.<br>
   b. NIM : Mengisiskan Nomor Induk Mahasiswa.<br>
   c. Jurusan : Mengisikan Jurusan Mahasiswa.<br>
   
   <b>Public</b> pada atribut diatas berarti bahwa atribut memiliki akses modifier dapat dilihat/diakses oleh semua orang.

   -<b>Metode</b> yang digunakan yaitu :
   - __construct() : Konstruktor untuk menginisialisasi objek mahasiswa dengan atribut yang sudah dimasukkan sebelumnya.
      ![image](https://github.com/user-attachments/assets/54066e28-a2a8-4013-b9ac-e054350685a9)

   - tampilkanData() : Fungsi yang digunakan untuk menampilkan data.<br>
 ![image](https://github.com/user-attachments/assets/4aa6a2c0-fa48-45e2-bad1-e35aa548b56f)
    
   - updateJurusan() : Fungsi untuk mengupdate jurusan mahasiswa.<br>

  ![image](https://github.com/user-attachments/assets/3f37815b-eaba-42c6-bc21-77c34eff752f)
   
   - setNim() : Fungsi untuk mengupdate NIM Mahasiswa<br>
![image](https://github.com/user-attachments/assets/ac509b12-b3f9-4001-89bb-83380bde2941)

-Penggunaan :
- Membuat objek Mahasiswa baru dengan mengambil atribut yang sudah di deklarasikan di awal.
  ![image](https://github.com/user-attachments/assets/05b859a5-79d4-417b-a518-5303ee147149)

- Menampilkan data mahasiswa yang sudah diinputkan dan diupdate

  ![image](https://github.com/user-attachments/assets/4bbe35c4-77ae-411f-836d-eb0ed9574d58)

- Mengupdate data jurusan mahasiswa<br>
  ![image](https://github.com/user-attachments/assets/6e7a967e-93ab-4e6e-a357-ade112a2ef48)

- Mengupdate data NIM mahasiswa<br>
  ![image](https://github.com/user-attachments/assets/8b4cc4b3-09a3-44ab-a3a3-6d9089751abf)

-Hasil code dari atribut dan method<br>
![image](https://github.com/user-attachments/assets/15af0401-ac6a-402e-ac3b-0c9f17a9a2dc)<br>
![image](https://github.com/user-attachments/assets/784ca73c-c8c4-4b7d-ba6a-4b770ed21b15)<br>

-Hasil Output dari Class Mahasiswa<br>
![image](https://github.com/user-attachments/assets/cd6116d7-bb38-4747-8fe3-8cd83f9d62fc)<br>

<b>b. Tugas 1 </b>
#### <i>Class Dosen</i>
Pada class dosen menggunakan atribut dan metode. 
-<b>Atribut</b> yang digunakan yaitu :<br>
![image](https://github.com/user-attachments/assets/e1694c76-0e7c-4253-afec-33a293a914f0)<br>

a. Nama : Menginputkan nama Dosen.<br>
b. NIP : Mengisikan nomor Dosen.<br>
c. matakuliah : Mengisikan mata kuliah yang diampu oleh dosen.<br>

 <b>Public</b> pada atribut diatas berarti bahwa atribut memiliki akses modifier dapat dilihat/diakses oleh semua orang.<br>

-<b>Metode</b> yang digunakan yaitu :<br>
   - __construct() : Konstruktor untuk menginisialisasi objek dosen dengan atribut yang sudah dimasukkan sebelumnya.<br>
     ![image](https://github.com/user-attachments/assets/8dbd4322-5182-4875-b908-b23e140f42d0)<br>

  - tampilkanDosen() : Fungsi yang digunakan untuk menampilkan data pada class dosen.<br>
![image](https://github.com/user-attachments/assets/b3a6fdf1-60a6-4f44-ab41-9f804eb042c2)<br>

-Hasil code dari atribut dan method<br>
![image](https://github.com/user-attachments/assets/fdce1476-299f-4122-8ca1-593585df8a7b)<br>

-Hasil Output dari Class Dosen<br>
![image](https://github.com/user-attachments/assets/f359f612-c812-4367-ae04-d64859a6dac9)<br>

### 2. PHP OOP-Jobsheet2 (Konsep Kelas dan Objek)
- Class adalah Blueprint/cetakan untuk menciptakan suatu objek. Dalam kata lain Class merupakan sekumpulan dari Objek.
- Object merupakan instansiasi dari class yang menjadi satu kesatuan dalam class, yang memegangi atribut dan method. Object merupakan hasil cetakan dari sebuah class.
- Prinsip OOP meliputi :<br>
  -Encapsulation<br>
  Encapsulation bertujuan untuk membungkus data (atribut) dan fungsi (metode) menjadi satu kesatuan dalam sebuah kelas, serta menyembunyikan detail implementasi dari dunia luar.<br>
  -Inheritance<br>
  Inheritance adalah konsep yang memungkinkan sebuah kelas mewarisi sifat-sifat (atribut dan metode) dari kelas lain. <br>
  -Polymorphism<br>
   Polymorphism memungkinkan suatu objek untuk mengambil berbagai bentuk. Dengan kata lain, satu metode yang sama bisa memiliki perilaku yang berbeda, tergantung dari objek yang memanggilnya.<br>
  -Abstraction<br>
  Abstraction adalah konsep yang menyederhanakan kompleksitas dengan hanya menampilkan fitur penting dari sebuah objek dan menyembunyikan detail implementasi.<br>

<b>a. Instruksi Kerja</b><br>
1. Membuat Class dan Object<br>
   - Membuat class Mahasiswa yang memiliki atribut nama, nim dan jurusan :<br>
     ![image](https://github.com/user-attachments/assets/ad0163ed-11b0-42a4-ba17-8c7f56150cfd) <br>
   - Membuat metode tampilkanData() dalam class mahasiswa :<br>
      ![image](https://github.com/user-attachments/assets/f46c6e67-6384-4911-80e8-aa746e10806a)<br>
   - Instansiasi Objek dari class Mahasiswa : <br>
   ![image](https://github.com/user-attachments/assets/5ab15a7a-1927-40c4-b00f-0592f5a4fddb)<br>
   - Tampilan/Output data Mahasiswa :<br>
![image](https://github.com/user-attachments/assets/108e6f0d-6723-4d63-aef3-f7d25e4c3810)<br><br>

2. Encapsulation<br>
   - Mengubah atribut dalam class mahasiswa menjadi private : <br>
   ![image](https://github.com/user-attachments/assets/752c3271-677b-4645-9d53-e53a98c22b23)<br>
   - Membuat metode getter dan setter untuk atribut pada class Mahasiswa : <br>
   ![image](https://github.com/user-attachments/assets/fcd0722a-af60-4102-bda7-700e53d9b624)<br>
   - Mendemonstrasikan akses ke atribut melalui
metode getter dan setter : <br>
![image](https://github.com/user-attachments/assets/9bd530f6-add7-4095-adb7-6ca0002f9f62)<br>
   - Tampilan?Output Encapsulation : <br>
![image](https://github.com/user-attachments/assets/b15119e1-608c-4b8d-bd59-901defe279b9)

3. Inheritance<br>
   - Membuat class Pengguna dengan atribut nama dan metode getNama() : <br>
   ![image](https://github.com/user-attachments/assets/360756c3-3fb2-4ff8-b4f2-0dd478c90e29)<br>
   - Membuat class Dosen yang mewarisi atribut pada class pengguna dan menambhakan atribut mataKuliah() : <br>
  ![image](https://github.com/user-attachments/assets/fc8f3e50-832a-4905-ac4f-15d6ac8b3338)<br>
  - Instansiasi objek dari class Dosen : <br>
  ![image](https://github.com/user-attachments/assets/200aa733-2a8a-4a50-89e6-5c9f90c57a13)<br>
  - Tampilan data Dosen : <br>
  ![image](https://github.com/user-attachments/assets/3b0f6b4a-1cda-4d03-bd94-c66a6b8b5f26)<br><br>

4. Polymorphism<br>
   - Membuat class pengguna dengan metode aksesFitur() : <br>
   ![image](https://github.com/user-attachments/assets/a514de77-bf2e-40ab-9eab-2f03a3705ec8)
   - Menginmplementasikan aksesFitur ke class Dosen dan Mahasiswa dengan cara berbeda : <br>
   ![image](https://github.com/user-attachments/assets/117fab18-65c2-43b8-b86e-09bf0feaa513)<br>
   - Instansiasi objek dari class Dosen dan Mahasiswa dan pemanggilan aksesFitur : <br>
   ![image](https://github.com/user-attachments/assets/3a592701-9932-4d60-aa41-2702ec4d45a1)<br>
   - Tampilan/Output :
     ![image](https://github.com/user-attachments/assets/ebbdcbfc-3096-434c-b228-54d2f0a800da)<br><br>

5. Abstraction<br>
   - Membuat class Abstract Pengguna dengan metode abstract aksesFitur() : <br>
   ![image](https://github.com/user-attachments/assets/273536f4-c94e-47f9-8252-11dba9086315)<br>
   - Mengimplementasikan class Dosen dan Mahasiswa : <br>
  ![image](https://github.com/user-attachments/assets/57e21433-18a9-486d-82c4-bdcd0f000553)<br>
  - Instansiasi objek dengan memanggil aksesFitur() : <br>
  ![image](https://github.com/user-attachments/assets/78f72c45-81eb-46ac-a4f2-07ad4b376ea7)<br>
  - Tampilan/Output <br>
    ![image](https://github.com/user-attachments/assets/7458fe62-7265-477d-a493-8e1737c05eda)<br>


 



   

   



 

