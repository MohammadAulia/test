<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Content</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/crud.css">
	<form method="post" action="">
<table>
<div>
	<tr>
		<td>Masukkan Text</td>
		<td>
			<input type="text" name="konten" border required>
		</td>
	</tr>
</div>
<div>
	<tr>
		<td>Masukan Gambar</td>
		<td>
			<input type="file" name="gambar" required>
		</td>
	</tr>
</div>
<div>
	<tr>
		<td>id User</td>
		<td>
			<input type="text" name="id_user" required>
		</td>
	</tr>
</div>
</table>
<button type="submit" name="submit" >Simpan</button>
</form>
<?php
if (isset($_POST["submit"])) {
	$konten = $_POST['konten'];
	$gambar = $_POST['gambar'];
	$id_user = $_POST['id_user'];
	$submit = mysql_query("INSERT INTO post (konten,gambar,id_user) VALUES ('$_POST[konten]','$_POST[gambar]','$_POST[id_user]') ");
	if ($submit) {
		echo "Berhasil Disimpan <a href = 'content.php'>Lihat</a>";
		}else{
		echo "Gagal Simpan";
		}
}
?>
</body>
</html>