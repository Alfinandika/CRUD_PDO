<?php
require_once('koneksi.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$telepon = $_POST['telepon'];
$id = $_POST['id'];

if($_GET['page'] == 'tambah'){

	$insert = $db->prepare("INSERT INTO anggota (nama, alamat, jk, telepon) VALUES (?, ?, ?, ?)");
	$insert->bindParam(1, $nama);
	$insert->bindParam(2, $alamat);
	$insert->bindParam(3, $jk);
	$insert->bindParam(4, $telepon);
	$insert->execute();
} else if ($_GET['page'] == 'edit') {
	$edit = $db->prepare("UPDATE anggota SET nama = ?, alamat = ?, jk = ?, telepon = ? WHERE id_anggota= ?");
	$edit->execute(array($nama, $alamat, $jk, $telepon, $id));
} else if($_GET['page'] == 'hapus'){
	$hapus = $db->prepare("DELETE FROM anggota WHERE id_anggota= :id");
	$hapus->bindParam(':id', $id);
	$hapus->execute();
}


?>