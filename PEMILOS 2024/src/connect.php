<?php
// Koneksi ke database Supabase
$conn = pg_connect("host=aws-0-ap-southeast-1.pooler.supabase.com dbname=postgres user=postgres.wokunjzwnzfvgtvoccmg password=Zharispemilos21");

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>
