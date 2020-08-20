<?php
ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass="";
$db="db_kadurama";

$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
?>