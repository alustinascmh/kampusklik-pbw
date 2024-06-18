<?php
include "koneksi.php";

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['proses']) && $_GET['proses'] == '1') {
    $nama_mahasiswa = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $file_name = '';
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_name = basename($_FILES['file']['name']);
        $file_path = 'upload/' . $file_name;

        // Pindahkan file yang diunggah ke direktori upload
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
            die("Gagal mengunggah file.");
        }

        $query = "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', prodi='$prodi', file='$file_name' WHERE id=$id";
    } else {
        $query = "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', prodi='$prodi' WHERE id=$id";
    }

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
