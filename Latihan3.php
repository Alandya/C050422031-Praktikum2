<?php
    $a = 5;
    $b = 2.5;
    $komentar = "Selamat Datang";
    echo ("Nilai variabel a adalah = $a <br>");
    echo ("Nilai Variabel b adalah = $b <br>");
    echo ("Nilai variabel komentar adalah = $komentar<br>");

    $tambah = $a + $b;
    $kurang = $a - $b;
    $kali = $a * $b;
    $bagi = $a / $b;

    echo ("Hasil Penjumlahan a dan b adalah = $tambah <br>");
    echo ("Hasil Pengurangan a dan b adalah = $kurang <br>");
    echo ("Hasil Perkalian a dan b adalah = $kali <br>");
    echo ("Hasil Pembagian a dan b adalah = $bagi <br>");
    
    $garis = "===============================================";
    echo "<p>";
    echo $garis . "<br>";
    $nama = "Poliban"; // Tambahkan variabel $nama
    echo $komentar . " Di Lab " . $nama . "<br>Selamat belajar Pemrograman Web <br>";
    echo $garis . "<br>"; 
?>