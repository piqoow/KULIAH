<!DOCTYPE html>
<html>
<head>
	<title>Membuat perhitungan laba dann rugi dengan php</title>
</head>
<body>
	<h2>Membuat perhitungan laba rugi dengan PHP</h2>
<p>
Tepung Terigu = 2,5 Kg  (harga Rp 7.500/Kg)<br>
Gula Pasir = 1,5 Kg (harga Rp 9.000/Kg)<br>
Margaren  =  2 Bungkus (harga Rp 5000/Bungkus)<br>
Telor  = 0.5 Kg (harga Rp 20.000/Kg)<br>
Minyak Goreng : 2 L (harga Rp  11000/Buah)
</p>
	<br/>
	<form method="post">
		<table>
		<tr>
				<td>Tepung Terigu</td>
				<td><input type="text" name="tepung"></td>
		</tr>
		<tr>
				<td>Gula Pasir</td>
				<td><input type="text" name="gula"></td>
		</tr>
		<tr>
				<td>Margaren</td>
				<td><input type="text" name="margaren"></td>
		</tr>
		<tr>
				<td>Telor</td>
				<td><input type="text" name="telor"></td>
		</tr>
		<tr>
				<td>Minyak Goreng</td>
				<td><input type="text" name="minyak"></td>
		</tr>
</table> <br> <table>
			<tr>
				<td>Harga Jual</td>
				<td><input type="text" name="harga"></td>
			</tr>
            <tr>
				<td>Banyak Produksi</td>
				<td><input type="text" name="produksi"></td>
			</tr>
			<tr>
				<td>Modal</td>
				<td><input type="text" name="modal"></td>
			</tr>
			
				<td></td>
				<td><input type="submit" value="Hitung"></td>
			<tr>	
				<td>
					<button onclick="goBack()">Kembali</button>
					<script>
					function goBack() {

						window.history.back();
						}
					</script>
				</td>
			</tr>
		</table>
	</form>
<?php
$tepung = $_POST['tepung'];
$gula = $_POST['gula'];
$margaren = $_POST['margaren'];
$telor = $_POST['telor'];
$minyak = $_POST['minyak'];
	$tepung1 = $tepung*$j1



$harga = $_POST['harga'];
$produksi = $_POST['produksi'];
$modal = $_POST['modal'];
 
if($harga > $modal){
	$laba = ($harga*$produksi)-$modal;
	echo "Anda Mendapat UNTUNG Sebesar = " . $laba;
}elseif($modal > $harga){
	$rugi = $modal-($harga*$produksi);
	echo "Anda Mendapat RUGI Sebesar = " . $rugi;
}else{
	echo "Tidak laba tidak rugi";
}
?>
</body>
</html>


