<?php
    class Mahasiswa {
        public $nim;
        public $nama;
        public $prodi;

        public function __construct($nim, $nama, $prodi) {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->prodi = $prodi;
        }

        public function kuliah() {
            return "Mahasiswa bernama $this->nama sedang mengikuti perkuliahan.";
        }

        public function ujian() {
            return "Mahasiswa dengan NIM $this->nim sedang melaksanakan ujian semester.";
        }

        public function praktikum() {
            return "Mahasiswa dari prodi $this->prodi sedang berada di laboratorium untuk melakukan praktikum.";
        }
    }

    $mahasiswa1 = new Mahasiswa("245150201111", "Aniza Helwa Mahananai", "Teknik Informatika");
    $mahasiswa2 = new Mahasiswa("245150209999", "Taylor Swift", "Teknik Mesin");


    echo "<h3>Data Mahasiswa 1:</h3>";
    echo "Nama: " . $mahasiswa1->nama . "<br>";
    echo $mahasiswa1->kuliah() . "<br>";
    echo $mahasiswa1->ujian() . "<br>";
    echo $mahasiswa1->praktikum() . "<br>";

    echo "<hr>";

    echo "<h3>Data Mahasiswa 2:</h3>";
    echo "Nama: " . $mahasiswa1->nama . "<br>";
    echo $mahasiswa2->kuliah() . "<br>";
    echo $mahasiswa2->ujian() . "<br>";
    echo $mahasiswa2->praktikum() . "<br>";

?>