<?php
ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass="";
$db="raja_ampat";

$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
?>