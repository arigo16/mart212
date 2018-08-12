<?php

include '../include/config.php';

$idbarang = $_GET['id_barang'];

$db = $con->query("DELETE FROM barang WHERE id_barang='$idbarang'");

if ($con->affected_rows > 0){
	echo "<script>alert('Barang telah berhasil dihapus');window.location='../index.php?page=barang'</script>";
}else{
	echo "<script>alert('Barang telah gagal dihapus');window.location='../index.php?page=barang'</script>";
}

?>