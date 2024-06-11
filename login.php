<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Contoh validasi sederhana (gantilah dengan validasi yang lebih kuat)
    if ($username == "pengguna" && $password == "password123") {
        // Login sukses, arahkan ke halaman lain atau tampilkan pesan selamat datang
        echo "Selamat datang, " . $username . "!";
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>