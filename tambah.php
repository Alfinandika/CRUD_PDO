<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>

<div class="panel-group" style="width: 60%;">
	<div class="panel panel-primary">
	<div class="panel-heading">Tambah Data</div>
	<div class="panel-body">
		<div class="alert alert-danger" id="kosong" style="display: none;">Inputan Tidak Boleh Ada Yang Kosong</div>
		<div class="alert alert-success" id="suksestambah" style="display: none;">Data Berhasil Di tambah</div>

		<div class="form-group">
		<input type="text" id="nama" placeholder="Nama Anda" name="" class="form-control">
		</div>

		<div class="form-group">
		<select id="jk" class="form-control">
			<option value="laki-laki">laki-laki</option>
			<option value="perempuan">Perempuan</option>
		</select>
		</div>

		<div class="form-group">
		<input type="text" id="telepon" placeholder="Telepon" name="" class="form-control">
		</div>

		<div class="form-group">
		<textarea id="alamat" placeholder="alamat" name="" class="form-control">
		</textarea>
		</div>
		<button id="simpantambah" class="btn btn-primary glyphicon glyphicon-plus" style="margin-left: -87%"> Tambah </button>


	</div>	
	</div>
</div>

</body>
</html>