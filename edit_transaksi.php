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
        $id_transaksi = $_GET['id_transaksi'];
        $transaksi = mysqli_query($conn, 
                      " SELECT customer.nama, transaksi.id_transaksi, 
                      transaksi.tgl_transaksi, transaksi.jumlah, transaksi.total, menu.nama 
                      AS nama_menu FROM customer
                      INNER JOIN transaksi ON customer.id_customer = transaksi.id_customer
                      INNER JOIN menu ON transaksi.id_menu = menu.id_menu
                      WHERE id_transaksi = '$id_transaksi';");
        while ($data = mysqli_fetch_array($transaksi)){
            $id_transaksi = $data['id_transaksi'];
            $nama = $data ['nama'];
            $nama_menu = $data ['nama_menu'];
            $tgl_transaksi = $data ['tgl_transaksi'];
            $jumlah = $data ['jumlah'];
            $total = $data ['total'];
        }
    ?>
    <div class="container">
        <a href="transaksi.php" class="btn btn-primary mt-3">Kembali</a>
        <h3 class="fw-bold mt-4 mb-4 text-center">Edit Data Transaksi</h3>
        <form action="proses_edit_transaksi.php?id_transaksi=<?= $id_transaksi; ?>" method="POST">
            <table cellpadding="10" cellspacing="0" class="table table-striped">
                <tr>
                    <td>ID Transaksi</td>
                    <td><input type="text" class="form-control" name="id_transaksi" value="<?= $id_transaksi; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Customer</td>
                    <td><input type="text" class="form-control" name="nama" value="<?= $nama; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Menu</td>
                    <td><input type="text" class="form-control" name="nama_menu" value="<?= $nama_menu; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Transaksi</td>
                    <td><input type="date" class="form-control" name="tgl_transaksi" value="<?= $tgl_transaksi; ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah Beli</td>
                    <td><input type="text" class="form-control" name="jumlah" value="<?= $jumlah; ?>"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" class="form-control" name="total" value="<?= $total; ?>"></td>
                </tr>
                <td> 
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td>
            </table>
        </form>
    </div>
</body>
</html>