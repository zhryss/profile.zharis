<?php
// Koneksi ke database Supabase
$conn = pg_connect("host=wokunjzwnzfvgtvoccmg.supabase.co dbname=postgres user=postgres password=Zharispemilos21");

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . pg_last_error());
} else {
    echo "Koneksi berhasil!";
}
?>
