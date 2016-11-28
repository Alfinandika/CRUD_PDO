<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php
require_once('koneksi.php');
?>

<table class="table table-bordered" style="width: 60%;">
	<tr>
		<th> ID </th>
		<th> Nama </th>
		<th> Alamat </th>
		<th> Telepon </th>
		<th> Jenis Kelamin </th>
		<th> Action </th>
	</tr>
	<?php
try {
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$no = 1;
	$tampil = $db->query('SELECT * FROM anggota');

	While($data = $tampil->fetch(PDO::FETCH_LAZY)){
	?>
	
		<tr>
		<td><?=$no++;?> </td>
		<td><?=$data['nama']?></td>
		<td><?=$data['alamat']?></td>
		<td><?=$data['telepon']?></td>
		<td><?=$data['jk']?></td>
		<td>
			<button class="btn btn-success edit" id="<?=$data['id_anggota'];?>" > Edit</button>
			<button class="btn btn-danger hapus" id="<?=$data['id_anggota'];?>"> Hapus</button>
		</td>
	</tr>


<?php }} catch (Exception $e) {
	echo $e->getMessage();

	
}
	?>

</table>

</body>
</html>
