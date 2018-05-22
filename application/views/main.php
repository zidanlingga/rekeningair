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
			<h3 class="text-center">Tampil</h3>
		</div>

		<table class="table table-striped">
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Penanggung</th>
				<th class="text-center">Alamat</th>
				<th class="text-center">Type</th> 
				<th class="text-center">Biaya Beban</th>
				<th class="text-center">Harga Perkubik</th>
				<th class="text-center">Pemakaian Air</th>
				<th class="text-center">Total Bayar</th>
				<th class="text-center">Action</th>
			</tr>

			<?php 
			$no = 1;
			foreach ($tb->result() as $p) {
				?>
				<tr>
					<th class="text-center"><?php echo $no; ?></th>
					<th class="text-center"><?php echo $p->penanggung; ?></th>
					<th class="text-center"><?php echo $p->alamat; ?></th>
					<th class="text-center"><?php 
					if ($p->kode == "A1") {
						echo "Pejabat";
					}
					elseif($p->kode == "A2"){
						echo "PNS";
					}
					elseif($p->kode == "A3"){
						echo "Programmer";
					}
					else{
						echo "Buruh";
					}

					 ?></th>
					
					<th class="text-center"><?php echo $p->biayabeban; ?></th>
					<th class="text-center"><?php echo $p->hargaperkubik; ?></th>
					<th class="text-center"><?php echo $p->pemakaianair; ?></th>
					<th class="text-center"><?php echo $p->totalbayar; ?></th>
					<th class="text-center">
						<a href="dashboard/edit/<?php echo $p->id; ?>" class="btn btn-warning btn-sm">
							Edit
						</a>
						<a href="dashboard/hapus/<?php echo $p->id; ?>" class="btn btn-danger btn-sm">
							Hapus
						</a>
					</th>
				</tr>
				<?php
				$no++;
			}
			 ?>
		</table>
	</div>

</body>
</html>