<?php
    include('connect.php');
    $id_customer = $_GET ['id_customer'];

    $result = mysqli_query($conn, "DELETE FROM customer WHERE id_customer='$id_customer'");
    header("Location: customer.php");
?>