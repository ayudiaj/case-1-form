<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12 text-end mt-3">
                
            </div>
        </div>
        <div class="row mx-5  d-flex align-items-center">
            <div class="col-xl-5 col-md-5 col-sm-10 gambar text-left mb-3 mb-md-0">
                <div class="border p-3">
                    

                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-10">
                <table class="table">
                    <tr>
                        <td>Judul</td>
                        <td class="text-start judul">:
                            <?php echo $_POST['judul'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td class="text-start">:
                            <?php echo $_POST['penulis'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>ISBN</td>
                        <td class="text-start">:
                            <?php echo $_POST['isbn'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td class="text-start">:
                            <?php echo $_POST['penerbit'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td class="text-start">:
                            <?php echo $_POST['tahunterbit'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td class="text-start">: Rp
                            <?php echo $_POST['harga'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sinopsis</td>
                        <td class="text-start">:
                            <?php echo $_POST['sinopsis'] ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php include ("headerr.php");

    if (isset ($_POST["submit"])) {
        $file = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp_name, "uploads/" . $file);
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-end mt-3">
                <a href="form.php"><button type="button" class="btn btn-primary"><i
                            class="bi bi-plus-circle"></i>Tambah</button></a>
            </div>
        </div>
        <div class="row mx-5  d-flex align-items-center">
            <div class="col-xl-5 col-md-5 col-sm-10 gambar text-center mb-3 mb-md-0">
                <div class="border p-3">
                    <img src="uploads/<?php echo $file ?>" style="width: 200px;" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-10">
                <table class="table">
                    <tr>
                        <td>Judul</td>
                        <td class="text-start judul">:
                            <?php echo $_POST['judul'] ?>
                        </td>
                        <!-- <td class="text-start judul">: </td> -->
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td class="text-start">:
                            <?php echo $_POST['penulis'] ?>
                        </td>
                        <!-- <td class="text-start penulis">: </td> -->
                    </tr>
                    <tr>
                        <td>ISBN</td>
                        <td class="text-start">:
                            <?php echo $_POST['isbn'] ?>
                        </td>
                        <!-- <td class="text-start ISBN">: </td> -->
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td class="text-start">:
                            <?php echo $_POST['penerbit'] ?>
                        </td>
                        <!-- <td class="text-start penerbit">: </td> -->
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td class="text-start">:
                            <?php echo $_POST['tahunterbit'] ?>
                        </td>
                        <!-- <td class="text-start tahunterbit">: </td> -->
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td class="text-start">:
                            <?php echo $_POST['harga'] ?>
                        </td>
                        <!-- <td class="text-start harga">: Rp</td> -->
                    </tr>
                    <tr>
                        <td>Sinopsis</td>
                        <td class="text-start">:
                            <?php echo $_POST['sinopsis'] ?>
                        </td>
                        <!-- <td class="text-start sinopsis">: </td> -->
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <?php include ("footer.php"); ?>
</body>

</html>