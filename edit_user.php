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
$id_user = $_GET['id_user'];
$query = mysql_query("SELECT * FROM user WHERE id_user = '$id_user' ");
while ($data = mysql_fetch_array($query)) {
	

	?>
	<link rel="stylesheet" type="text/css" href="css/crud.css">
<form method="post" action="">
	<table>
	<div>
		<tr>
			<td>Masukan Nama Anda</td>
			<td>
				<input type="hidden" name="id_user" value="<?php echo $data['id_user'];?>" >
				<input type="text" name="name" value="<?php echo $data['name'];?>" required>
			</td>
		</tr>
	</div>
	<div>
		<tr>
			<td>Masukan Foto</td>
			<td>
				<input type="file" name="photo" value="<?php echo $data['photo'];?>" required>
			</td>
		</tr>
	</div>
	<div>
		<tr>
			<td>Email</td>
			<td>
				<input type="text" name="email" value="<?php echo $data['email'] ?>" required>
			</td>
		</tr>
	</div>
	<div>
			<tr>
			<td>Password</td>
			<td>
				<input type="text" name="password" value="<?php echo $data['password'] ?>" required>
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
	$name = $_POST['name'];
	$photo = $_POST['photo'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$submit = mysql_query("UPDATE user SET name='$name',photo='$photo',email='$email',password='$password' WHERE id_user = $id_user");
	if ($submit) {
		echo "Berhasil Disimpan <a href = 'content.php'>Lihat</a>";
	}else{
		echo "Gagal Simpan";
	}
}
?>
</body>
</html>