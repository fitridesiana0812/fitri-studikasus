<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Domini Restaurant-Studi Kasus</title>
</head>
<body>
    <?php
      include ('connect.php');
        $id_customer = $_GET['id_customer'];
        $customer = mysqli_query($conn, "SELECT * FROM customer WHERE id_customer = '$id_customer' ");
        while ($data = mysqli_fetch_array($customer)){
            $id_customer = $data['id_customer'];
            $nama = $data ['nama'];
            $jenis_kelamin = $data ['jenis_kelamin'];
            $telepon = $data ['telepon'];
            $email = $data ['email'];
            $alamat = $data ['alamat'];
        }
    ?>
    <div class="container">
        <a href="customer.php" class="btn btn-primary mt-3">Kembali</a>
        <h3 class="fw-bold mt-4 mb-4 text-center">Edit Data Customer</h3>
        <form action="proses_edit_customer.php?id_customer=<?= $id_customer; ?>" method="POST">
            <table cellpadding="10" cellspacing="0" class="table table-striped">
                <tr>
                    <td>ID pengarang</td>
                    <td><input type="text" class="form-control" name="id_customer" value="<?= $id_customer; ?>"></td>
                </tr>
                <tr>
                    <td>Nama pengarang</td>
                    <td><input type="text" class="form-control" name="nama" value="<?= $nama; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select class="form-control" name="jenis_kelamin">
                        <option value="laki-laki" <?= ($jenis_kelamin == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="perempuan" <?= ($jenis_kelamin == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="number" class="form-control" name="telepon" value="<?= $telepon; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control" name="email" value="<?= $email; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" class="form-control" name="alamat" value="<?= $alamat; ?>"></td>
                </tr>
                <td> 
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td>
            </table>
        </form>
    </div>
</body>
</html>