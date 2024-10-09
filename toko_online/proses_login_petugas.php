<?php 
    if($_POST){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login_petugas.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login_petugas.php';</script>";
        } else {
            include "koneksi.php";
            // Mengganti tabel dari siswa menjadi petugas dan mencocokkan kolomnya
            $qry_login = mysqli_query($conn, "SELECT * FROM `petugas` WHERE `username` = '$username' AND `password` = '$password'");

            if(mysqli_num_rows($qry_login) > 0){
                $dt_login = mysqli_fetch_array($qry_login);

                session_start();
                // Menyimpan data petugas ke sesi
                $_SESSION['id_petugas'] = $dt_login['id_petugas'];
                $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
                $_SESSION['status_login'] = true;

                header("location: dashboard.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login_petugas.php';</script>";
            }
        }
    }
?>
