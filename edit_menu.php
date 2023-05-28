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
        $id_menu = $_GET['id_menu'];
        $menu = mysqli_query($conn, "SELECT * FROM menu WHERE id_menu = '$id_menu' ");
        while ($data = mysqli_fetch_array($menu)){
            $id_menu = $data['id_menu'];
            $nama = $data ['nama'];
            $kategori = $data ['kategori'];
            $harga = $data ['harga'];
            $deskripsi = $data ['deskripsi'];
            $gambar = $data ['gambar'];
        }
    ?>
    <div class="container">
        <a href="menu.php" class="btn btn-primary mt-3">Kembali</a>
        <h3 class="fw-bold mt-4 mb-4 text-center">Edit Data Menu</h3>
        <form action="proses_edit_menu.php?id_menu=<?= $id_menu; ?>" method="POST">
            <table cellpadding="10" cellspacing="0" class="table table-striped">
                <tr>
                    <td>ID Menu</td>
                    <td><input type="text" class="form-control" name="id_menu" value="<?= $id_menu; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Menu</td>
                    <td><input type="text" class="form-control" name="nama" value="<?= $nama; ?>"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>
                        <select class="form-control" name="kategori">
                            <option value="">- Pilih Menu -</option>
                            <option value="Pizza" <?= ($kategori == 'Pizza') ? 'selected' : ''; ?>>Pizza</option>
                            <option value="Burger" <?= ($kategori == 'Burger') ? 'selected' : ''; ?>>Burger</option>
                            <option value="Pasta" <?= ($kategori == 'Pasta') ? 'selected' : ''; ?>>Pasta</option>
                            <option value="Minuman" <?= ($kategori == 'Minuman') ? 'selected' : ''; ?>>Minuman</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" class="form-control" name="harga" value="<?= $harga; ?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><input type="text" class="form-control" name="deskripsi" value="<?= $deskripsi; ?>"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>
                        <input class="form-control" name="gambar" value="<?= $gambar;?>">
                        <input type="file" class="form-control" name="gambar" value="<?= $gambar;?>">
                    </td>      
                </tr>
                <td> 
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td>
            </table>
        </form>
    </div>
</body>
</html>