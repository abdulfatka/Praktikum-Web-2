<?php
// Mulai session
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Arahkan pengguna kembali ke halaman login
header("Location: index.html");
exit();
?>

