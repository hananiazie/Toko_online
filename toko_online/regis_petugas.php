<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registrasi Petugas</title>
</head>

<body>
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-5 text-center">
                        <h2 class="h3">Registrasi Petugas Toko Kue</h2>
                    </div>
                    <form method="POST" action="proses_regis_petugas.php">
                        <div class="col-12 mb-3">
                            <label for="nama_petugas" class="form-label">Nama Petugas <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="level" class="form-label">Level <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="level" id="level" required>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Daftar</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    // Tampilkan pesan error jika ada
                    if (isset($_GET['error'])) {
                        echo "<p class='text-danger text-center mt-3'>{$_GET['error']}</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
