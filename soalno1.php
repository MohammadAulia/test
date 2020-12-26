<form method="post" action="">
	<table>
	<tr>
		<td>Nama Karywan</td>
		<td><input type="text" name="nama" required></td>
	</tr>
	<tr>
		<td>gaji pokok</td>
		<td><input type="text" name="gaji" required></td>
	</tr>
</table>
<input type="submit" name="submit" value="Enter">
</form>

<?php
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$gaji = $_POST['gaji'];
	$tunjangan = 500000;
	$bpjs = 3/100*$gaji;
	$pajak = 5/100*$gaji;
	$gajibersih = $gaji+$tunjangan-$bpjs-$pajak;
	$totalgajih = $gaji+$tunjangan+$gajibersih-$bpjs-$pajak;

	echo "Nama Karywan = $nama";
	echo "<br>";
	echo "gaji pokok = $gaji";
	echo "<br>";
	echo "tunjangan = $tunjangan";
	echo "<br>";
	echo "BPJS = $bpjs";
	echo "<br>";
	echo "pajak = $pajak";
	echo "<br>";
	echo "Gajih Bersih = $gajibersih";
	echo "<br>";
	echo "============================";
	echo "<br>";
	echo "Total Gajih = $totalgajih";
}
?>