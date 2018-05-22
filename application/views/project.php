<!DOCTYPE html>
<html>
<head>
	<title>PEMBAYARAN REKENING AIR</title>
</head>
<style type="text/css">
   body{
   	margin-top: 10px;
   	font-family: arial;

   }
   #ins{
   		height: 25px;
   		width: 300px;
   		font-weight: bold;
   		font-size: 12px;
   		border: solid #937 1px;
   }
  #in{
   		height: 25px;
   		width: 50px;
   		font-weight: bold;
   		font-size: 12px;
   		border: solid #937 1px;
   }
  #sel{
   		height: 25px;
   		width: 100px;
   		font-weight: bold;
   		font-size: 12px;
   		border: solid #937 1px;
   }
     #sub{
     	background: #f2c7c7;
   		height: 25px;
   		width: 300px;
   		font-weight: bold;
   		font-size: 12px;
   		border: solid #937 1px;
   		color: #fff;
   }
     #sb{
     	color: #fff;
     	background: #cb0051;
   		height: 25px;
   		width: 300px;
   		font-weight: bold;
   		font-size: 12px;
   		border: solid #937 1px;
   }
     table{
     	background: ;
   		border: solid #234 3px;
   		padding-left: 100px;
   		padding-right: 100px;
   		padding-top: 20px;
   		padding-bottom: 15px;
   }
</style>
<body>
<form method="post" action="#" >
	<table align="center">
		<tr>
			<th colspan="2"><font size="5">PEMBAYARAN REKENING AIR</font><hr color="#905" width="700"></th>
		</tr>
		<tr>
			<th align="left">NAMA</th>
			<td><input id="ins" type="text" name="nama"></td>
		</tr>
<tr>
			<th align="left">ALAMAT</th>
			<td><input id="ins" type="text" name="alamat"></td>
		</tr>
		<tr>
		<th align="left">KODE</th>
		<td><select id="sel" name="kode">
		<option>-PILIH-</option>
		<option value="A1">A1</option>
			<option value="A2">A2</option>
			<option value="A3">A3</option>
			<option value="A4">A4</option>
		</td>
			</select>
		</tr>
		<?php
		error_reporting(0);
		$kode=$_POST['kode'];
		$jp=$_POST['jp'];
		$by=$_POST['by'];
		$hp=$_POST['hp'];
			if($kode =="A1"){
				$jp="Pelanggan Pabrik";
				$by="35000";
				$hp="1525";
			}
			else if($kode == "A2") {
				$jp="Pelanggan Supermarket/Swalayan";
				$by="27900";
				$hp="1125";
			}
			else if($kode == "A3") {
				$jp="Pelanggan Toko/Pasar";
				$by="21900";
				$hp="755";
			}
			else if($kode == "A4") {
				$jp="Pelanggan B aja/Normal";
				$by="17500";
				$hp="525";
			}
		?>
		<tr>
			<th align="left">JENIS PRLANGGAN</th>
			<td ><input id="ins" type="hidden" name="jp" value="<?php echo "$jp"?>">
			<input id="ins" disabled="disabled" value="<?php echo "$jp"?>"></td>
		</tr>
		<tr>
			<th align="left">BIAYA BEBAN</th>
			<td ><input id="ins" type="hidden" name="by" value="<?php echo "$jp"?>">
			<input readonly="" value="<?php echo "$by"?>" id="biaya_beban"></td>
		</tr>
		<tr>
			<th align="left">HARGA PERKUBIK</th>
			<td ><input id="ins" type="hidden" name="hp" value="<?php echo "$jp"?>">
			<input readonly="" value="<?php echo "$hp"?>" id="hrg_perkubik"></td>
		</tr>
		<tr>
			<th align="left">PEMAKAIAN AIR</th>
			<td><input type="text" name="pemakaian" id="pemakaian_air" onkeyup="proses()">&nbsp;<b><font size="4">KUBIK</font></b></td>
		</tr>
		<?php
		$kode=$_POST['kode'];
		$jp=$_POST['jp'];
		$by=$_POST['by'];
		$hp=$_POST['hp'];
		$pemakaian=$_POST['pemakaian'];
		$tot=$_POST['tot'];
		$tot=$pemakaian*$hp+$by;
		?>
		<tr>
			<th align="left">TOTAL BAYAR</th>
			<td ><input id="ins" type="hidden" name="tot" value="<?php echo "$tot"?>">
			<input disabled="disabled" value="<?php echo "$tot"?>" id="total"></td>
		</tr>
		<tr>
			<td colspan="2" height="50">
				<input id="sub" type="submit" value="PROSES">&nbsp;&nbsp;&nbsp;
				<input id="sb" type="reset" value="HAPUS">
			</td>
		</tr>
	</table>
</form>

<script type="text/javascript">
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