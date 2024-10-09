<?php
session_start();
include 'connect.php';  // Koneksi ke Supabase

// Ambil data dari form
$id_kandidat = $_POST['kandidat'];
$id_kelas = $_POST['classID'];

// SQL untuk memasukkan data voting ke tabel voting
$query = "INSERT INTO voting (id_kandidat, id_kelas) VALUES ($id_kandidat, '$id_kelas')";

// Jalankan query dan cek apakah berhasil
if (pg_query($conn, $query)) {
    echo "Suara berhasil disimpan!";
} else {
    echo "Error: " . pg_last_error($conn);
}

// Arahkan kembali ke halaman voting
header('Location: voting.html');
?>