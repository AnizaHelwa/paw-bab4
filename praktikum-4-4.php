<?php
    $prodi = ["Teknik Informatika", "Teknik Komputer", 
    "Ilmu Komputer", "Sistem Informasi", "Teknologi Informasi", 
    "Pendidikan Teknologi Informasi"];

    echo "<h3>Daftar Program Studi:</h3>";
    foreach ($prodi as $studi) {
        echo $studi . "<br>";
    }

    echo "<hr>";

    $mahasiswa = ["nama" => "Aniza Helwa", "prodi" => "Teknik Informatika", "nim" => "245150201111043"];

    echo "<h3>Data Mahasiswa:</h3>";
    foreach ($mahasiswa as $key => $value) {
        echo ucfirst($key) . " : " . $value . "<br>";
    }
?>