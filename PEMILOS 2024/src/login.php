<?php
session_start();
include 'connect.php';  // Mengimpor koneksi database

// Aktifkan error reporting untuk debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek kredensial pengguna
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = pg_query($conn, $query);
$user = pg_fetch_assoc($result);

if ($user) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    header('Location: voting.html');  // Arahkan ke halaman voting
    exit();  // Pastikan untuk menghentikan eksekusi setelah header
} else {
    echo "Username atau password salah!";
}
?>
