<?php
    include ('../include/config.php');

    $id_barang = $_GET['id_barang'];
    
    $query = mysqli_query($con, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $barang = mysqli_fetch_array($query);
    $data = array(
                'nama_barang'  =>  $barang['nama_barang'],
                'harga_jual'   =>  $barang['harga_jual'],);
    echo json_encode($data);
?>