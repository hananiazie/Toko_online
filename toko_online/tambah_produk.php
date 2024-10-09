<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Produk</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center my-4">Tambah Produk</h3>
        <div class="form-container">
            <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk:</label>
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="number" id="harga" name="harga" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="fotoProduk" class="form-label">Foto Produk:</label>
                    <input type="file" id="foto_produk" name="foto" class="form-control">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">Tambah Produk</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>