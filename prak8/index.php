<!-- NAMA  : ALUSTINA SUCI MANAH -->
<!-- KELAS : 4A INFORMATIKA -->
<!-- NPM   : 2210631170006 -->

<?php
$berat_badan = "";
$tinggi_badan = "";
$bmi = "";
$kategori_bmi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];

    $bmi = $berat_badan / (($tinggi_badan / 100) * ($tinggi_badan / 100));

    if ($bmi < 18.5) {
        $kategori_bmi = "Kurus";
    } elseif ($bmi >= 18.5 && $bmi < 23) {
        $kategori_bmi = "Normal";
    } elseif ($bmi >= 23 && $bmi < 27.5) {
        $kategori_bmi = "Kelebihan Berat Badan";
    } elseif ($bmi >= 27.5 && $bmi < 30) {
        $kategori_bmi = "Obesitas Kelas I";
    } elseif ($bmi >= 30 && $bmi < 35) {
        $kategori_bmi = "Obesitas Kelas II";
    } else {
        $kategori_bmi = "Obesitas Kelas III";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Penghitung BMI</title>
</head>
<body>
    <h1>Aplikasi Penghitung BMI</h1>
    <form method="post">
        <label for="berat_badan">Berat Badan (kg) :</label>
        <input type="number" id="berat_badan" name="berat_badan" value="<?php echo $berat_badan; ?>">
        <br>
        <br>
        <label for="tinggi_badan">Tinggi Badan (cm) :</label>
        <input type="number" id="tinggi_badan" name="tinggi_badan" value="<?php echo $tinggi_badan; ?>">
        <br>
        <br>
        <input type="submit" id="hitung_bmi" value="Hitung BMI">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <script>
            document.getElementById("berat_badan").value = "";
            document.getElementById("tinggi_badan").value = "";
        </script>
        <br>
        <h2>Hasil Perhitungan:</h2>
        <ul>
            <li>Berat Badan: <?php echo $berat_badan; ?> kg</li>
            <li>Tinggi Badan: <?php echo $tinggi_badan; ?> cm</li>
            <li>BMI: <?php echo number_format($bmi, 2); ?></li>
            <li>Kategori BMI: <?php echo $kategori_bmi; ?></li>
        </ul>
    <?php endif; ?>
</body>
</html>