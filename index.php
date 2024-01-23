<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Pemrograman PHP</title>
</head>

<body>

    <h2>Pilih Bangun Ruang Untuk Perhitungan Luas dan Volume</h2>

    <form method="post" action="process.php">
        Bangun Ruang:
        <select name="shape" required>
            <option value="tabung">Tabung</option>
            <option value="kubus">Kubus</option>
            <option value="balok">Balok</option>
            <option value="kerucut">Kerucut</option>
            <option value="bola">Bola</option>
        </select>

        <br><br>
        <input type="submit" name="submit" value="Perhitungan Dengan Rumus Bangun Ruang">

    </form>
</body>

</html>