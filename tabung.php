<?php
$luaspermukaan = $volume = 0; // Inisialisasi variabel

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $tinggi = isset($_POST['tinggi']) ? $_POST['tinggi'] : 0;
    $jarijari = isset($_POST['jarijari']) ? $_POST['jarijari'] : 0;

    // Hitung luasperm$luaspermukaan dan luas kubus jika nilai sisi tidak kosong
    if ($tinggi > 0 && $jarijari>0) {
        $luaspermukaan = 2 * M_PI * $jarijari * ($jarijari + $tinggi);
        $volume = M_PI * $jarijari**2 * $tinggi;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan Rumus Bangun Ruang Tabung</title>
</head>

<body>
    <h2>Penghitungan Rumus Bangun Ruang Tabung</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Tinggi Bangun Ruang Tabung: <input type="number" name="tinggi" required>
        <br><br>
        Jari-Jari Permukaan Bangun Ruang Tabung: <input type="number" name="jarijari" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung Luas dan Volume Bangun Ruang">
    </form>

    <?php if ($luaspermukaan > 0 && $volume > 0) : ?>
        <h1>Luas Permukaan Bangun Ruang Tabung</h1>
        <p><?php echo $luaspermukaan, ' cm' ?></p>

        <br>

        <h1>Volume Permukaan Bangun Ruang Tabung</h1>
        <p><?php echo $volume, ' cm' ?></p>
    <?php endif; ?>

    <button type="button"><a href="index.php">Kembali Ke Halaman Menu Utama<a></button>

</body>

</html>