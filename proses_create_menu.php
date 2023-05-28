<?php
    $id_menu = $_POST['id_menu'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    include ('connect.php');

    $result = mysqli_query($conn, "INSERT INTO `menu` (`id_menu`,`nama`, `kategori`,`harga`,`deskripsi`,`gambar`) VALUES ('$id_menu','$nama','$kategori','$harga','$deskripsi','$gambar'); ");
    header("Location:menu.php");
?>