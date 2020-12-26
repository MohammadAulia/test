<?php
include "koneksi.php"
?>

<?php
$query = mysql_query("SELECT * FROM post INNER JOIN user ON post.id_user = user.id_user ");
while ($data = mysql_fetch_array($query)) {
?>
<html>
<head>
	<title>WaysGram</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<div class="container">
<div class="photo">
	<ul><img src="<?php echo $data['photo']; ?>"></ul>
	<a href="edit_user.php?id_user=<?php echo $data['id_user']; ?>"><?php echo $data['name']; ?></a><br>
	<br>
	<a href="adduser.php"><img src="icon/plus.png"></a><br>
	<br>
	<a href="delete_user.php?id_user=<?php echo $data['id_user']; ?>"><img src="icon/delete.png"></a>
</div>
<div class="crud">
	<a href="addkonten.php"><img src="icon/plus.png"></a>
	<a href="edit_konten.php?id=<?php echo $data['id']; ?>"><img src="icon/pencil.png"></a>
	<a href="delete_konten.php?id=<?php echo $data['id']; ?>"><img src="icon/delete.png"></a>
</div>
<div class="konten">
<ul>
	<img src="<?php echo $data['gambar'];?>">
	<?php echo $data['konten'];?>
</ul>
</div>
</div>


<?php
} 

?>

</body>
</html>