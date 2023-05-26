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
        <a href="customer.php" class="btn btn-primary mt-3">Kembali</a>
        <h3 class="fw-bold mt-4 mb-4 text-center">Tambah Data Customer</h3>
        <form action="proses_create_customer.php" method="POST">
            <table cellpadding="10" cellspacing="0" class="table table-striped">
                <tr>
                    <td>ID Customer</td>
                    <td><input type="number" class="form-control" name="id_customer" placeholder="Masukan ID"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" class="form-control" name="nama" placeholder="Masukan Nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select class="form-control" name="jenis_kelamin">
                        <option>Pilih Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="number" class="form-control" name="telepon" placeholder="Masukan Telepon"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control" name="email" placeholder="Masukan Email"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat"></td>
                </tr>
                <td> 
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td>
            </table>
        </form>
    </div>
    </body>
</html>