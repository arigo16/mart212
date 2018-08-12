<?php

include ('../include/config.php');

$idmitra = $_GET['id_mitra'];	
$namamitra = $_POST['nama'];
$alamatmitra = $_POST['alamat'];
$telpmitra = $_POST['telp'];

$con->query("UPDATE mitra SET nama_mitra='$namamitra', alamat_mitra='$alamatmitra', telp_mitra='$telpmitra' WHERE id_mitra='$idmitra'");

if ($con->affected_rows > 0){
	echo "<script>alert('Mitra telah berhasil disimpan');window.location='../index.php?page=mitra'</script>";
}else{
	echo "<script>alert('Mitra telah gagal disimpan');window.location='../index.php?page=mitra'</script>";
}