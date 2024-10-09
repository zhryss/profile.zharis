<?php
session_start();
include 'connect.php';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek kredensial pengguna
$query = "SELECT * FROM users WHERE username = '$username'";
$result = pg_query($conn, $query);
$user = pg_fetch_assoc($result);

if ($user && $password === $user['password']) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    header('Location: ../voting.html'); // Arahkan ke halaman voting
    exit();
} else {
    echo "Username atau password salah!";
}
?>