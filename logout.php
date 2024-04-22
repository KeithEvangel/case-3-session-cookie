<?php
// Memulai atau melanjutkan sesi yang sudah ada
session_start();

// Menghapus semua data yang disimpan dalam sesi
session_unset();

// Menghancurkan sesi yang sedang berlangsung
session_destroy();

// Mengarahkan pengguna kembali ke halaman utama
header("Location: index.php");

// Menghentikan eksekusi skrip setelah pengalihan header dilakukan
exit();
?>
