<?php
// Include koneksi database
include 'koneksi.php';

// Cek apakah form registrasi sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    // Hash password sebelum disimpan
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memasukkan data ke dalam tabel petugas
    $query = "INSERT INTO petugas (nama_petugas, username, password, level) VALUES ('$nama_petugas', '$username', '$password_hashed', '$level')";

    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman login petugas setelah berhasil registrasi
        header('Location: login_petugas.php');
        exit();
    } else {
        // Redirect kembali ke halaman registrasi dengan pesan error
        header('Location: register.php?error=Registrasi gagal!');
        exit();
    }
}
?>
