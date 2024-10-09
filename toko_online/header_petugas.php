<?php
// Memastikan session hanya dimulai jika belum ada session yang aktif
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SESSION['status_login'] != true) {
    header("Location: login_petugas.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kue Online</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Toko Kue</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tampil_pelanggan.php">Daftar Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_produk.php">Daftar Produk</a>
            </li>      
            <li class="nav-item">
              <a class="nav-link" href="tampil_transaksi_petugas.php">Histori Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_petugas.php">Tampil Petugas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout_petugas.php">Logout</a>
            </li>
          </ul>
        </div>
        <span class="navbar-text">
          Selamat datang, <?php echo $_SESSION['nama_petugas']; ?>!
        </span>
      </div>
    </nav>

    <!-- Container for the main content -->
    <div class="container bg-light rounded" style="margin-top: 10px;">
