<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<body>
<div align="center">

 <div style="margin: 5px;">
	<button id="tambah_data" class="btn btn-primary glyphicon glyphicon-plus"> Tambah Data</button>
 </div>
 <div id="tampil">
 	
 </div>
 <div id="crud">
 	
 </div>


</div>
<script>
	$("#tampil").load('tampil.php');
	$("#tambah_data").click(function(){
		$("#crud").load('tambah.php');
	});
	$("#crud").on('click', '#simpantambah', function(){
		var nama = $("#nama").val();
		var jk = $("#jk").val();
		var telepon = $("#telepon").val();
		var alamat = $("#alamat").val();

		if(nama == '' || jk == '' || telepon == '' || alamat == ''){
			$("#kosong").css('display', 'block');
			$("#suksestambah").css('display', 'none');

		}else {
			$("#kosong").css('display', 'none');
			$("#suksestambah").css('display', 'block');
			$.ajax({
				url : 'proses.php?page=tambah',
				type : 'POST',
				data : 'nama='+nama+'&jk='+jk+'&telepon='+telepon+'&alamat='+alamat,
				success : function(){
					$("#tampil").load('tampil.php');
				}

			})

		}

	});
	$("#tampil").on('click', '.edit', function(){
		var id = $(this).attr("id");
		$("#crud").load('edit.php?id='+id);
	});

	$("#crud").on('click', '#simpanedit', function(){
		var nama = $("#nama").val();
		var jk = $("#jk").val();
		var telepon = $("#telepon").val();
		var alamat = $("#alamat").val();
		var id = $("#id_anggota").val();

		if(nama == '' || jk == '' || telepon == '' || alamat == ''){
			$("#kosong").css('display', 'block');
			$("#suksestambah").css('display', 'none');

		}else {
			$("#kosong").css('display', 'none');
			$("#suksestambah").css('display', 'block');
			$.ajax({
				url : 'proses.php?page=edit',
				type : 'POST',
				data : 'nama='+nama+'&jk='+jk+'&telepon='+telepon+'&alamat='+alamat+'&id='+id,
				success : function(){
					$("#tampil").load('tampil.php');
				}

			})

		}

	});

	$("#tampil").on('click', '.hapus', function(){
		var id = $(this).attr("id");
		$.ajax({
			url : 'proses.php?page=hapus',
			type : 'POST',
			data : 'id='+id,
			success : function(){
				$("#tampil").load('tampil.php');

			}
		})
		
	});
</script>
</body>
</html>