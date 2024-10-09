<?php 
if ($_POST) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='login_pelanggan.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='login_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        // Mengganti tabel dari petugas menjadi pelanggan dan mencocokkan kolomnya
        $qry_login = mysqli_query($conn, "SELECT * FROM `pelanggan` WHERE `username` = '$username' AND `password` = '$password'");

        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);

            session_start();
            // Menyimpan data pelanggan ke sesi
            $_SESSION['id_pelanggan'] = $dt_login['id_pelanggan'];
            $_SESSION['nama_pelanggan'] = $dt_login['nama'];
            $_SESSION['status_login'] = true;

            header("location: dashboard.php");
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login_pelanggan.php';</script>";
        }
    }
}
?>
