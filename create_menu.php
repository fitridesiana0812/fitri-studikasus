<!doctype html>
<html lang="en">
    <head>
        <title>Domini Restaurant-Studi Kasus</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <a href="menu.php" class="btn btn-primary mt-3">Kembali</a>
        <h3 class="fw-bold mt-4 mb-4 text-center">Tambah Data Menu</h3>
        <form action="proses_create_menu.php" method="POST">
            <table cellpadding="10" cellspacing="0" class="table table-striped">
                <tr>
                    <td>ID Menu</td>
                    <td><input type="number" class="form-control" name="id_menu" placeholder="Masukan ID"></td>
                </tr>
                <tr>
                    <td>Nama Menu</td>
                    <td><input type="text" class="form-control" name="nama" placeholder="Masukan Nama Menu"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>
                        <select class="form-control" name="kategori">
                        <option value="">- Pilih Menu -</option>
                        <option>Pizza</option>
                        <option>Burger</option>
                        <option>Pasta</option>
                        <option>Minuman</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" class="form-control" name="harga" placeholder="Masukan Harga"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><input type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" class="form-control" name="gambar" placeholder="Masukan Gambar"></td>
                </tr>
                <td> 
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td>
            </table>
        </form>
    </div>
    </body>
</html>