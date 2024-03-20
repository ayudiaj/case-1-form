<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include ("headerr.php"); ?>

    <div class="container mt-3">
        <h1>Add Books</h1>

        <form action="tampilan.php" method="POST" enctype="multipart/form-data" class="was-validated">
            <div class="mb-2 mt-3">
                <label for="uname" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Dilan 1990" name="judul" required
                    autofocus>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Judul tidak boleh kosong</div>
            </div>
            <div class="mb-2">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" id="penulis" placeholder="Pidi Baiq" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Penulis tidak boleh kosong</div>
            </div>
            <div class="mb-2">
                <label for="uname" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" placeholder="1234" name="isbn" required autofocus>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">ISBN tidak boleh kosong</div>
            </div>
            <div class="mb-2">
                <label for="uname" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" placeholder="Gramedia Publisher" name="penerbit"
                    required autofocus>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Penerbit tidak boleh kosong</div>
            </div>
            <div class="mb-2">
                <label for="uname" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahunterbit" placeholder="1990" name="tahunterbit" required
                    autofocus>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Tahun Terbit tidak boleh kosong</div>
            </div>
            <div class="mb-2">
                <label for="uname" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="100000" name="harga" required autofocus>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Harga tidak boleh kosong</div>
            </div>
            <div class="mb-2">
                <label for="uname" class="form-label">Sinopsis</label>
                <textarea class="form-control" id="sinopsis" placeholder="Dilan 1990" name="sinopsis"
                    required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Sinopsis tidak boleh kosong</div>
            </div>
            <div class="mb-2">
                <label for="uname" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="file" name="file" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Gambar tidak boleh kosong</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary px-3 py-2">Simpan</button>
        </form>
    </div>

    <?php include ("footer.php");


    ?>

</body>

</html>