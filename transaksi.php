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
            <?php
            include ('connect.php');
                // Mengambil data menu dan harga dari database
                $query = "SELECT nama, harga FROM menu";
                $result = mysqli_query($conn, $query);

                // Membuat array data menu dan harga
                $menuHarga = array();
                while ($row = mysqli_fetch_assoc($result)) {
                $menuHarga[$row['nama']] = $row['harga'];
                }
            ?>
            <script>
            function updateHarga() {
                var menuSelect = document.getElementById("nama");
                var hargaInput = document.getElementById("harga");

                // Mendapatkan harga berdasarkan pilihan menu
                var harga = <?php echo json_encode($menuHarga); ?>[menuSelect.value];

                // Menampilkan harga pada input harga
                hargaInput.value = harga;
            }
            </script>
    <body>   
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
        <a href="transaksi.php" class="btn btn-danger mt-3">Reset</a>
        <h3 class="fw-bold mt-4 mb-4 text-center">Tambah Pesanan</h3>
        <form method="POST">
            <table cellpadding="10" cellspacing="0" class="table table-striped">
            <tr>
                <td>Nama Customer</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="nama_customer"></td>
            </tr>
            <tr>
                <td>Tanggal Transaksi</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_transaksi"></td>
            </tr>
            <tr>
                <td for="nama">Nama Menu</td>
                <td>:</td>
                <td>
                    <select class="form-control" id="nama" name="nama" onchange="updateHarga()">
                        <option value="">- Pilih -</option>
                        <?php foreach ($menuHarga as $nama => $harga): ?>
                            <option value="<?php echo $nama; ?>"><?php echo $nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td for="harga">Harga</td>
                <td>:</td>
                <td><input class="form-control" type="text" id="harga" name="harga" readonly></td>
            </tr>
            <tr>
                <td>Jumlah Item Menu</td>
                <td>:</td>
                <td>
                    <select class="form-control" name="qty">
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <input class="btn btn-warning" type="submit" name="hitung" value="Hitung">
                    <input class="btn btn-danger" type="reset" name="reset" value="Reset">
                </td>
            </tr>
            </table>
        </form>
        

    <hr />
    <h3 class="fw-bold mt-4 mb-4 text-center">Hasil :</h3>
    <!-- Coding PHP hitung total bayar ketik disini -->

        <?php
        if(isset($_POST['hitung'])){
            $nama_customer = $_POST['nama_customer'];
            $tgl_transaksi = $_POST['tgl_transaksi'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];
            $qty = $_POST['qty'];
            $total = $harga * $qty;
        ?>

        <!-- Tampilan tabel -->
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Nama Customer</th>
                    <th>Nama Transaksi</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Banyaknya</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $nama_customer; ?></td>
                    <td><?php echo $tgl_transaksi; ?></td>
                    <td><?php echo $nama; ?></td>
                    <td>Rp. <?php echo number_format($harga, 0, ',', '.'); ?></td>
                    <td><?php echo number_format($qty, 0, ',', '.'); ?></td>
                    <td>Rp. <?php echo number_format($total, 0, ',', '.'); ?></td>
                </tr>
            </tbody>
        </table>

        <?php } ?>

    </form>
    </div>
</body>
</html>

