<?php
include "header_petugas.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h2 class="text-center my-4">Daftar Produk</h2>
        <div class="row">
            <?php
            include "koneksi.php";
            $qry_produk = mysqli_query($conn, "select * from produk");
            while ($dt_produk = mysqli_fetch_array($qry_produk)) {
                $foto = !empty($dt_produk['foto']) ? $dt_produk['foto'] : 'default.jpg'; // Cek foto atau pakai default
                $fotoPath = "foto/" . $foto; // Path ke gambar
                ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="foto/<?= $fotoPath ?>" class="card-img-top">
                        <?php echo "<p>Path gambar: " . $fotoPath . "</p>"; // Debug untuk mengecek path ?>
                        <div class="card-body">
                            <p><strong>Nama Produk:</strong> <?= $dt_produk['nama_produk'] ?></p>
                            <p><strong>Deskripsi:</strong> <?= $dt_produk['deskripsi'] ?></p>
                            <p><strong>Harga Rp:</strong> <?= $dt_produk['harga'] ?></p>
                            <a href="ubah_produk_petugas.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-primary">Ubah</a>
                            <a href="hapus_produk.php?id_produk=<?= $dt_produk['id_produk'] ?>" onclick="return confirm('Apakah anda yakin menghapus produk ini?')" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="text-left">
            <a href="tambah_produk.php" class="btn btn-success">Tambah Produk</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
