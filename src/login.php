<?php
session_start();
include 'connect.php';  // Koneksi ke Supabase

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
} else {
    echo "Username atau password salah!";
}
?>