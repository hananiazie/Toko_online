<?php
// Include koneksi database
include 'koneksi.php';

// Cek apakah form registrasi sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    // Hash password sebelum disimpan
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Proses upload foto
    $foto = $_FILES['foto']['name'];
    $target_dir = "assets/foto_pelanggan/";
    $target_file = $target_dir . basename($foto);
    
    // Pastikan foto diupload dan tidak ada error
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
        // Query untuk memasukkan data ke dalam tabel pelanggan
        $query = "INSERT INTO pelanggan (nama, username, password, alamat, telp, foto) VALUES ('$nama', '$username', '$password_hashed', '$alamat', '$telp', '$foto')";

        if (mysqli_query($conn, $query)) {
            // Redirect ke halaman login pelanggan setelah berhasil registrasi
            header('Location: login_pelanggan.php');
            exit();
        } else {
            // Redirect kembali ke halaman registrasi dengan pesan error
            header('Location: regis_pelanggan.php?error=Registrasi gagal!');
            exit();
        }
    } else {
        // Redirect kembali ke halaman registrasi dengan pesan error jika foto gagal diupload
        header('Location: regis_pelanggan.php?error=Gagal mengunggah foto!');
        exit();
    }
}
?>
