<?php
include 'koneksi.php';
$id = $_REQUEST['id_user'];
$query = "SELECT * FROM user WHERE id_user='$id'";
$sql = mysql_query($query);

$row = mysql_fetch_array($sql);

$id = $_REQUEST['id_user'];
$query2 = "DELETE FROM user WHERE id_user='$id'";
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