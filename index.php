
<?php

// Memanggil koneksi database
require_once __DIR__ . '/config/database.php';

// Menentukan halaman
$page = $_GET['page'] ?? 'beranda';

$allowed = ['beranda', 'profil', 'katalog', 'kontak'];

if (!in_array($page, $allowed, true)) {
    $page = 'beranda';
}

// Judul halaman
$pageTitles = [
    'beranda' => 'Beranda',
    'profil' => 'Profil',
    'katalog' => 'Katalog',
    'kontak' => 'Kontak'
];

$pageTitle = $pageTitles[$page];
// Memanggil bagian website
include __DIR__ . '/includes/header.php';
include __DIR__ . '/views/' . $page . '.php';
include __DIR__ . '/includes/footer.php';

?>
