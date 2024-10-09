<?php
include "koneksi.php";

$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// Jika password diubah, maka update dengan password baru, jika tidak tetap password lama
if (!empty($password)) {
    $password_hashed = md5($password); // Menggunakan MD5 untuk hash password
    $update = mysqli_query($conn, "UPDATE petugas SET 
        nama_petugas = '$nama_petugas', 
        username = '$username', 
        password = '$password_hashed', 
        level = '$level' 
        WHERE id_petugas = '$id_petugas'");
} else {
    $update = mysqli_query($conn, "UPDATE petugas SET 
        nama_petugas = '$nama_petugas', 
        username = '$username', 
        level = '$level' 
        WHERE id_petugas = '$id_petugas'");
}

if ($update) {
    echo "<script>alert('Sukses mengubah data petugas');location.href='tampil_petugas.php';</script>";
} else {
    echo "<script>alert('Gagal mengubah data petugas');location.href='ubah_petugas.php?id_petugas=$id_petugas';</script>";
}
?>
