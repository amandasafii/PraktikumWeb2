<?php

abstract class Course {
    
    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}

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

// Membuat objek dari kelas OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse("DIP");
$offlineCourse = new OfflineCourse("Matdiss");

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails();
echo "<br>";
echo $offlineCourse->getCourseDetails();

?>
