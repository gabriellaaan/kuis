<?php
// Fungsi untuk membersihkan input
function cleanInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Inisialisasi variabel
$bangunruang = "";

// Cek apakah formulir sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari dropdown dan bersihkan
    $bangunruang = cleanInput($_POST["shape"]);

    // Cek kondisi berdasarkan nilai dropdown
    switch ($bangunruang) {
        // Redirect ke halaman masing-masing rumus
        case 'kubus':
            header("Location: kubus.php");
            exit();
        case 'tabung':
            header("Location: tabung.php");
            exit();
        case 'balok':
            header('Location: balok.php');
            exit();
        case 'kerucut':
            header('Location: kerucut.php');
            exit();
        case 'bola':
            header('Location: bola.php');
            exit();
            
    }
};