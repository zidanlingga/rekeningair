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

		<form action="<?php echo base_url('dashboard/update/' . $tb->id) ?>" method="POST">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $tb->penanggung; ?>">	
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" class="form-control"><?php echo $tb->alamat; ?></textarea>	
			</div>
			<div class="form-group">
				<label>Kode</label>
				<select name="kode" class="form-control" id="select" onchange="jp()">
					<option value="<?php echo $tb->kode; ?>"><?php echo $tb->kode; ?></option>
					
					<?php 

					$kode_select = ['A1', 'A2', 'A3', 'A4'];


					for ($i=0; $i < count($kode_select) ; $i++) { 
						
						if ($kode_select[$i] != $tb->kode) {
							?>
							<option value="<?php echo $kode_select[$i]; ?>">
								<?php echo $kode_select[$i]; ?>
							</option>
							<?php
						}	
					}
					 ?>
				</select>	
			</div>
			<div class="form-group">
				<label>Jenis Pelanggan</label>
				<input type="text" disabled="" class="form-control" id="jenis_pelanggan">	
			</div>
			<div class="form-group">
				<label>Biaya Beban</label>
				<input type="number" name="biayabeban" value="<?php echo $tb->biayabeban; ?>" class="form-control" onkeyup="proses()" id="biaya_beban">	
			</div>
			<div class="form-group">
				<label>Harga Perkubik</label>
				<input type="number" name="hargaperkubik" value="<?php echo $tb->hargaperkubik; ?>" class="form-control" onkeyup="proses()" id="hrg_perkubik">	
			</div>
			<div class="form-group">
				<label>Pemakaian Air</label>
				<input type="number" name="pemakaianair" class="form-control" value="<?php echo $tb->pemakaianair; ?>" onkeyup="proses()" id="pemakaian_air">	
			</div>
			<div class="form-group">
				<label>Total Bayar</label>
				<input type="number" name="totalbayar" class="form-control" readonly="" id="total" value="<?php echo $tb->totalbayar; ?>"> 	
			</div>

			<button type="submit" value="submit" name="submit" class="btn btn-primary">
				Update
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
			show = " Pelanggan Supermarket/Swalayan";
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