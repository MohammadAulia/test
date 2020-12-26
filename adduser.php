<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/crud.css">
	<form method="post" action="">
<table>
<div>
	<tr>
		<td>Nama</td>
		<td>
			<input type="text" name="name" required>
		</td>
	</tr>
</div>
<div>
	<tr>
		<td>Photo</td>
		<td>
			<input type="file" name="photo" required>
		</td>
	</tr>
</div>
<div>
	<tr>
		<td>Email</td>
		<td>
			<input type="text" name="email" required>
		</td>
	</tr>
</div>
<div>
	<tr>
		<td>Password</td>
		<td>
			<input type="text" name="password" required>
		</td>
	</tr>
</div>
</table>
<button type="submit" name="submit" value="Simpan">Simpan</button>
</form>
<?php
if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$photo = $_POST['photo'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$submit = mysql_query("INSERT INTO user (name,photo,email,password) VALUES ('$_POST[name]','$_POST[photo]','$_POST[email]','$_POST[password]') ");
	if ($submit) {
		echo "Berhasil Disimpan <a href = 'content.php'>Lihat</a>";
	}else{
		echo "Gagal Simpan";
	}
}
?>
</body>
</html>