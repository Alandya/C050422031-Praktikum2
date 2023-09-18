DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Kerucut</title>
    </head>
    <body>
        <h2>Kalkulator Bangun Ruang Kerucut</h2>
        <form method="post" action="">
            <label>Jari-jari alas (r):</label>
            <input type="number" name="jari_jari" required><br><br> <!-- Perbaiki nama input -->
            <label>Tinggi (h):</label>
            <input type="number" name="tinggi" required><br><br>
            <input type="submit" name="hitung" value="Hitung"><br><br> <!-- Perbaiki type dan name input submit -->
        </form>
        <?php
            if (isset($_POST['hitung'])){
                $jari_jari = $_POST['jari_jari'];
                $tinggi = $_POST['tinggi'];

                $luas_alas = 3.14 * $jari_jari * $jari_jari;

                $sisi_miring = sqrt(($jari_jari * $jari_jari) + ($tinggi * $tinggi));
                $luas_permukaan = 3.14 * $jari_jari * ($jari_jari + $sisi_miring);

                echo "<h3>Hasil Perhitungan:</h3>";
                echo "Luas Alas Kerucut: " . number_format($luas_alas, 2) . " satuan luas<br>";
                echo "Luas Permukaan Kerucut: " . number_format($luas_permukaan, 2) . " satuan luas<br>";
            }
        ?>
    </body>
</html>
