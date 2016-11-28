<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>

<?php
require_once('koneksi.php');
$id = $_GET['id'];
$tampiledit = $db->query("SELECT * FROM anggota WHERE id_anggota='$id'");
$data = $tampiledit->fetch(PDO::FETCH_LAZY);
?>


<div class="panel-group" style="width: 60%;">
	<div class="panel panel-info">
	<div class="panel-heading">Edit Data</div>

	<div class="panel-body">
		<div class="alert alert-danger" id="kosong" style="display: none;">Inputan Tidak Boleh Ada Yang Kosong</div>
		<div class="alert alert-success" id="suksestambah" style="display: none;">Data Berhasil Di Edit</div>

		<div class="form-group">
		<input type="text" id="nama" placeholder="Nama Anda" value="<?=$data['nama']?>" name="" class="form-control">
		</div>

		<div class="form-group">
		<select id="jk" value="" class="form-control">
			<option value="laki-laki">laki-laki</option>
			<option value="perempuan" <?php if($data['jk'] == 'perempuan'){ echo 'selected';}?>>Perempuan</option>
		</select>
		</div>

		<div class="form-group">
		<input type="text" id="telepon" placeholder="Telepon" name="" value="<?=$data['telepon']?>" class="form-control">
		</div>

		<div class="form-group">
		<textarea id="alamat" placeholder="alamat" value="" name="" class="form-control">
		<?=$data['alamat']?>
		</textarea>
		</div>
		<input type="hidden" id="id_anggota" value="<?=$data['id_anggota']?>" name="">
		<button id="simpanedit" class="btn btn-primary glyphicon glyphicon-plus" style="margin-left: -87%"> Simpan </button>


	</div>	
	</div>
</div>
</body>
</html>

