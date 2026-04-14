<?php
    function penjumlahan ($num1, $num2) {
        $sum = $num1 + $num2;
        return $sum;
    }

    echo "<h3>Hasil Penjumlahan:</h3>";
    echo "Penjumlahan 15 + 25 = " . penjumlahan(15, 25) . "<br>";
    echo "Penjumlahan 100 + 75 = " . penjumlahan(100, 75) . "<br>";

    echo "<hr>";

    function hitungPanjangTeks ($teks) {
        return strlen($teks);
    }

    echo "<h3>Hasil Hitung Panjang String:</h3>";
    $input1 = "Informatika UB";
    $input2 = "Taylor Swift";

    echo "Panjang string '$input1' adalah: " . hitungPanjangTeks($input1) . " karakter<br>";
    echo "Panjang string '$input2' adalah: " . hitungPanjangTeks($input2) . " karakter<br>";
?>