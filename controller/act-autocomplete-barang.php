<?php
	include ('../include/config.php');

	$searchTerm = $_GET['term'];

	$query = $con->query("SELECT * FROM barang WHERE id_barang LIKE '%".$searchTerm."%'");
	while ($row = $query->fetch_assoc()) {
	    $data[] = $row['id_barang'];
	}
	echo json_encode($data);
?>