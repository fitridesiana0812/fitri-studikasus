<?php
    $id_transaksi = $data['id_transaksi'];
    $nama = $data ['nama'];
    $nama_menu = $data ['nama_menu'];
    $tgl_transaksi = $data ['tgl_transaksi'];
    $jumlah = $data ['jumlah'];
    $total = $data ['total'];
    
    include ('connect.php');

    $result = mysqli_query($conn, "UPDATE customer SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', telepon = '$telepon', email = '$email', alamat = '$alamat' WHERE id_customer = '$id_customer'");
    header("Location: customer.php");

?>