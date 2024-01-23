<?php
$volume = $luas = 0; // Inisialisasi variabel

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $sisi = isset($_POST['sisi']) ? $_POST['sisi'] : 0;

    // Hitung volume dan luas kubus jika nilai sisi tidak kosong
    if ($sisi > 0) {
        $volume = $sisi * $sisi * $sisi;
        $luas = 6 * $sisi ** 2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Rumus Volume Bangun Ruang Kubus</title>
</head>

<body>
    <h2>Perhitungan Rumus Volume Bangun Ruang Kubus</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Sisi Permukaan Bangun Ruang Kubus: <input type="number" name="sisi" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung Luas dan Volume Bangun Ruang">
    </form>

    <?php if ($volume > 0 && $luas > 0) : ?>
        <h1>Luas Permukaan Bangun Ruang Kubus</h1>
        <p><?php echo $luas, 'cm' ?></p>

        <br>

        <h1>Volume Bangun Ruang Kubus</h1>
        <p><?php echo $volume, 'cm' ?></p>
    <?php endif; ?>
    
    <button type="button"><a href="index.php">Kembali Ke Halaman Menu Utama<a></button>

</body>

</html>