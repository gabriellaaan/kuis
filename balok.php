<?php
$luas = $volume = 0; // Inisialisasi variabel

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : 0;
    $lebar = isset($_POST['lebar']) ? $_POST['lebar'] : 0;
    $tinggi = isset($_POST['tinggi']) ? $_POST['tinggi'] : 0;

    // Hitung luasperm$luas dan luas kubus jika nilai sisi tidak kosong
    if ($panjang > 0 && $lebar > 0 && $tinggi > 0) {
        $luas = 2 * ($panjang * $lebar + $panjang * $tinggi + $panjang * $lebar);
        $volume = $panjang * $lebar * $tinggi;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan Rumus Bangun Ruang Balok</title>
</head>

<body>
    <h2>Penghitungan Rumus Bangun Ruang Balok</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Panjang Bangun Ruang Balok: <input type="number" name="panjang" required>
        <br><br>
        Lebar Bangun Ruang Balok: <input type="number" name="lebar" required>
        <br><br>
        Tinggi Bangun Ruang Balok: <input type="number" name="tinggi" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung Luas dan Volume Bangun Ruang">
    </form>

    <?php if ($luas > 0 && $volume > 0) : ?>
        <h1>Luas Bangun Ruang Balok</h1>
        <p><?php echo $luas, ' cm' ?></p>

        <br>

        <h1>Volume Bangun Ruang Balok</h1>
        <p><?php echo $volume, ' cm' ?></p>
    <?php endif; ?>

    <button type="button"><a href="index.php">Kembali Ke Halaman Menu Utama<a></button>

</body>

</html>