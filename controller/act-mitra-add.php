<?php

include ('../include/config.php');

$carikode = $con->query("SELECT MAX(id_mitra) FROM mitra");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 2);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$kode_otomatis = "MT".str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {
	$kode_otomatis = "MT001";
}

$namamitra = $_POST['nama'];
$alamatmitra = $_POST['alamat'];
$telpmitra = $_POST['telp'];

$con->query("INSERT INTO mitra values ('$kode_otomatis', '$namamitra', '$alamatmitra', '$telpmitra')");

if ($con->affected_rows > 0){
	echo "<script>alert('Mitra telah berhasil disimpan');window.location='../index.php?page=mitra'</script>";
}else{
	echo "<script>alert('Mitra telah gagal disimpan');window.location='../index.php?page=mitra'</script>";
}