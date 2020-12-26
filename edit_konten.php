<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<?php
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM post WHERE id = '$id' ");
while ($data = mysql_fetch_array($query)) {
	

	?>
	<link rel="stylesheet" type="text/css" href="css/crud.css">
<form method="post" action="">
	<table>
	<div>
		<tr>
			<td>Masukan Konten Anda</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $data['id'];?>" >
				<input type="text" name="konten" value="<?php echo $data['konten'];?>" required>
			</td>
		</tr>
	</div>
	<div>
		<tr>
			<td>Masukan Gambar</td>
			<td>
				<input type="file" name="gambar" value="<?php echo $data['gambar'];?>" required>
			</td>
		</tr>
	</div>
	<div>
		<tr>
			<td>id User</td>
			<td>
				<input type="text" name="id_user" value="<?php echo $data['id_user'] ?>" required>
			</td>
		</tr>
	</div>
	</table>
	<button type="submit" name="submit" value="Update">Update</button>
</form>
<?php
}
?>

<?php
if (isset($_POST['submit'])) {
	$konten = $_POST['konten'];
	$gambar = $_POST['gambar'];
	$id_user = $_POST['id_user'];

	$submit = mysql_query("UPDATE post SET konten='$konten',gambar='$gambar',id_user='$id_user' WHERE id = $id");
	if ($submit) {
		echo "Berhasil Disimpan <a href = 'content.php'>Lihat</a>";
	}else{
		echo "Gagal Simpan";
	}
}
?>
</body>
</html>