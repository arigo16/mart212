<?php

include ('../include/config.php');

$idbarang = $_GET['id_barang'];	
$namabarang = $_POST['nama'];
$satuanbarang = $_POST['satuan'];
$kategoribarang = $_POST['kategori'];
$hargabeli = $_POST['harga_beli'];
$hargajual = $_POST['harga_jual'];
$mitra = $_POST['mitra'];

// $con->query("INSERT INTO barang values ('$kode_otomatis', '$namabarang', '$satuanbarang', '$kategoribarang', '$hargabeli', '$hargajual', '0', '$mitra')");
$con->query("UPDATE barang SET nama_barang='$namabarang', satuan_barang='$satuanbarang', id_kategori='$kategoribarang', harga_beli='$hargabeli', harga_jual='$hargajual', id_mitra='$mitra' WHERE id_barang='$idbarang'");

if ($con->affected_rows > 0){
	echo "<script>alert('Barang telah berhasil disimpan');window.location='../index.php?page=barang'</script>";
}else{
	echo "<script>alert('Barang telah gagal disimpan');window.location='../index.php?page=barang'</script>";
}