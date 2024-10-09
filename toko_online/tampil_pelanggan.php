<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tampil Pelanggan</title>
</head>
<body>
    <div class="container mt-4">
        <h3>Tampil Pelanggan</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>USERNAME</th>
                    <th>ALAMAT</th>
                    <th>TELP</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php"; // Koneksi ke database
                $qry_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan"); // Ubah 'pelanggan' sesuai nama tabel di database
                $no = 0;

                while($data_pelanggan = mysqli_fetch_array($qry_pelanggan)) {
                    $no++; ?>
                    <tr>              
                        <td><?=$no?></td>
                        <td><?=$data_pelanggan['nama']?></td> 
                        <td><?=$data_pelanggan['username']?></td> 
                        <td><?=$data_pelanggan['alamat']?></td>
                        <td><?=$data_pelanggan['telp']?></td>
                        <td>
                            <?php if (!empty($data_pelanggan['foto'])): ?>
                                <img src="uploads/<?=$data_pelanggan['foto']?>" alt="<?=$data_pelanggan['nama']?>" style="width: 50px; height: auto;">
                            <?php else: ?>
                                Tidak ada foto
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success">Ubah</a> 
                            | 
                            <a href="hapus_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
