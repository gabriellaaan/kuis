<?php
$luaspermukaan = $volume = 0; // Inisialisasi variabel

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $jarijari = isset($_POST['jarijari']) ? $_POST['jarijari'] : 0;

    // Hitung luasperm$luaspermukaan dan luasperm$luaspermukaan kubus jika nilai sisi tidak kosong
    if ($jarijari > 0) {
        $luaspermukaan = 4 * M_PI * $jarijari**2;
        $volume = 1.3 * M_PI * pow($jarijari, 3);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan Rumus Bangun Ruang Bola</title>
</head>

<body>
    <h2>Penghitungan Rumus Bangun Ruang Bola</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Jari-Jari Bangun Ruang Bola: <input type="number" name="jarijari" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung Luas dan Volume Bangun Ruang">
    </form>

    <?php if ($luaspermukaan > 0 && $volume > 0) : ?>
        <h1>Luas Permukaan Bangun Ruang Bola</h1>
        <p><?php echo $luaspermukaan, ' cm' ?></p>

        <br>

        <h1>Volume Bangun Ruang Bola</h1>
        <p><?php echo $volume, ' cm' ?></p>
    <?php endif; ?>

    <button type="button"><a href="index.php">Kembali Ke Halaman Menu Utama<a></button>

</body>

</html>