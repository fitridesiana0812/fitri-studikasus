<?php
    $id_menu = $_GET['id_menu'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];
    
    include ('connect.php');

    $result = mysqli_query($conn, "UPDATE menu SET nama = '$nama', kategori = '$kategori', harga = '$harga', deskripsi = '$deskripsi', gambar = '$gambar' WHERE id_menu = '$id_menu'");
    header("Location: menu.php");

?>