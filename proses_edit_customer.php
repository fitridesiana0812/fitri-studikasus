<?php
    $id_customer = $_GET['id_customer'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    
    include ('connect.php');

    $result = mysqli_query($conn, "UPDATE customer SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', telepon = '$telepon', email = '$email', alamat = '$alamat' WHERE id_customer = '$id_customer'");
    header("Location: customer.php");

?>