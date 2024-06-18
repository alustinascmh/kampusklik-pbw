<?php
include "koneksi.php";

// Atur header untuk menunjukkan bahwa ini adalah file yang diunduh
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=mahasiswa.csv');

// Buka output stream
$output = fopen('php://output', 'w');

// Tulis judul kolom
fputcsv($output, array('ID', 'Nama Mahasiswa', 'Prodi', 'File'));

// Ambil data dari database
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

// Looping data, lalu output
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}

// Tutup output stream
fclose($output);
exit();
?>
