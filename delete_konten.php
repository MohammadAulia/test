<?php
include 'koneksi.php';
$id = $_REQUEST['id'];
$query = "SELECT * FROM post WHERE id='$id'";
$sql = mysql_query($query);

$row = mysql_fetch_array($sql);

$id = $_REQUEST['id'];
$query2 = "DELETE FROM post WHERE id='$id'";
$sql2 = mysql_query($query2);
if ($sql2) {
	echo '<script>
		window.alert("Data Berhasil di hapus");
		window.location.href="./content.php";
		</script>';
	} else {
		echo '<script>
			window.alert("Data Gagal di hapus");
			</script>';
		}
?>