<?php
    $id_customer = $_POST['id_customer'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    include ('connect.php');

    $result = mysqli_query($conn, "INSERT INTO `customer` (`id_customer`,`nama`, `jenis_kelamin`,`telepon`,`email`,`alamat`) VALUES ('$id_customer','$nama','$jenis_kelamin','$telepon','$email','$alamat'); ");
    header("Location:customer.php");
?>