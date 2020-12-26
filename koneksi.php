<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "waysgram";
$db = mysql_connect($hostname,$username,$password) or die ("koneksi gagal");
mysql_select_db($dbname);
?>