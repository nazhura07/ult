<?php
session_start(); // Mulai session

// Hapus semua data session
session_unset();
session_destroy();

// Alihkan pengguna ke halaman login (misalnya index.php)
header("Location: login.php");
exit();
?>
