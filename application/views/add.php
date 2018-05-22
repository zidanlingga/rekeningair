<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap.min.css'); ?>">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="" class="navbar-brand">PRA APPS</a>
			</div>

			<ul class="nav navbar-nav">
				<li>
					<?php echo anchor('dashboard', 'Tampil'); ?>
				</li>
				<li>
					<?php echo anchor('dashboard/add', 'Tambah'); ?>
				</li> 
			</ul>

		</div>
	</nav>


	<div class="container">
		<div class="jumbotron">
			<h3 class="text-center">Tambah</h3>
		</div>

		<form action="<?php echo base_url('dashboard/restore') ?>" method="POST">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">	
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" class="form-control"></textarea>	
			</div>
			<div class="form-group">
				<label>Kode</label>
				<select name="kode" class="form-control" id="select" onchange="jp()">
					<option value="A1">A1</option>
					<option value="A2">A2</option>
					<option value="A3">A3</option>
					<option value="A4">A4</option>
				</select>	
			</div>
			<div class="form-group">
				<label>Jenis Pelanggan</label>
				<input type="text" disabled="" class="form-control" id="jenis_pelanggan">	
			</div>
			<div class="form-group">
				<label>Biaya Beban</label>
				<input type="number" name="biayabeban" class="form-control" onkeyup="proses()" id="biaya_beban">	
			</div>
			<div class="form-group">
				<label>Harga Perkubik</label>
				<input type="number" name="hargaperkubik" class="form-control" onkeyup="proses()" id="hrg_perkubik">	
			</div>
			<div class="form-group">
				<label>Pemakaian Air</label>
				<input type="number" name="pemakaianair" class="form-control" onkeyup="proses()" id="pemakaian_air">	
			</div>
			<div class="form-group">
				<label>Total Bayar</label>
				<input type="number" name="totalbayar" class="form-control" readonly="" id="total">	
			</div>

			<button type="submit" value="submit" name="submit" class="btn btn-primary">
				Simpan
			</button>

		</form>
	</div>

	<script type="text/javascript">	
	function jp () {
		select = document.getElementById('select');

		show = 'pilih kode';

		if (select.value == "A1") {
			show = "Pelanggan Pabrik";
		}
		else if(select.value == "A2"){
			show = "Pelanggan Supermarket/Swalayan";
		}
		else if(select.value == "A3"){
			show = "Pelanggan Toko/Pasar";
		}
		else{
			show = "Pelanggan B aja/Normal";
		}


		document.getElementById('jenis_pelanggan').value = show;
	}

	jp();

	function proses () {
			var biaya_beban  = document.getElementById('biaya_beban').value;
			var hrg_perkubik  = document.getElementById('hrg_perkubik').value; 
			var pemakaian_air  = document.getElementById('pemakaian_air').value;
			var total = document.getElementById('total');

			var proses = (parseInt(pemakaian_air) * parseInt(hrg_perkubik));

			total.value = proses + parseInt(biaya_beban);
		}
	</script>
</body>
</html>