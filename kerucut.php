<?php
$luaspermukaan = $volume = 0; // Inisialisasi variabel

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $jarijari = isset($_POST['jarijari']) ? $_POST['jarijari'] : 0;
    $panjanggaris = isset($_POST['panjanggaris']) ? $_POST['panjanggaris'] : 0;
    $diameter = isset($_POST['diameter']) ? $_POST['diameter'] : 0;

    // Hitung luasperm$luaspermukaan dan luasperm$luaspermukaan kubus jika nilai sisi tidak kosong
    if ($jarijari > 0 && $panjanggaris > 0 && $diameter > 0) {
        $luaspermukaan = M_PI * $jarijari * ($jarijari + $panjanggaris);
        $volume = 0.3 * M_PI * $jarijari**2 * $diameter;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Rumus Bangun Ruang Kerucut</title>
</head>

<body>
    <h2>Penghitungan Rumus Bangun Ruang Kerucut</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Jari-Jari Permukaan Bangun Ruang Kerucut: <input type="number" name="jarijari" required>
        <br><br>
        Panjang Garis Apotema Bangun Ruang Kerucut: <input type="number" name="panjanggaris" required>
        <br><br>
        Diameter Permukaan Bangun Ruang Kerucut: <input type="number" name="diameter" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung Luas dan Volume Bangun Ruang">
    </form>

    <?php if ($luaspermukaan > 0 && $volume > 0) : ?>
        <h1>Luas Permukaan Bangun Ruang Kerucut</h1>
        <p><?php echo $luaspermukaan, ' cm' ?></p>

        <br>

        <h1>Volume Bangun Ruang Kerucut</h1>
        <p><?php echo $volume, ' cm' ?></p>
    <?php endif; ?>

    <button type="button"><a href="index.php">Kembali Ke Halaman Menu Utama<a></button>

</body>

</html>