<html>
<head>
<title>Laporan Data Siswa</title>
</head>
<body> <font face="comic sans ms" size="2" >
<h2 align="center">Laporan Data Siswa</h2>
	<table width="60%" border="1">
		<tr bgcolor="#1E90FF" align="center" valign="middle">
	<td>No</td>
	<td align="center">NIS</th>
	<td align="center">Nama Siswa</th>
	<td align="center">Kelas</th>
	<td align="center">Jenis Kelamin</th>
	<td align="center">Tempat Lahir</ths>
	<td align="center">Tanggal Lahir</th>
	<td align="center">Alamat Rumah</th>
	<td align="center">No Telp</th>
 </tr>
 
<?php
include "koneksi.php";
$q = "			SELECT
				siswa.nis,
				siswa.nm_siswa,
				kelas.nm_kelas,
				siswa.jenis_kelamin,
				siswa.tempat_lahir,
				siswa.tanggal_lahir,
				siswa.alamat_rumah,
				siswa.no_telp
				FROM
				siswa ,
				kelas
				WHERE
				kelas.kd_kelas = siswa.kd_kelas";
$r = mysql_query($q) or die (mysql_error());
$no = 1;
while ($data = mysql_fetch_array($r))
{
 echo"<tr>
 <td align=center> $no </td>
	  <td>$data[nis]</td>
	  <td>$data[nm_siswa]</td>
	  <td>$data[nm_kelas]</td>
	  <td>$data[jenis_kelamin]</td>
	  <td>$data[tempat_lahir]</td>
	  <td>$data[tanggal_lahir]</td>
	  <td>$data[alamat_rumah]</td>
	  <td>$data[no_telp]</td>

	  </tr>";
	 $no++;
	  }
	  ?>
	  </table>
	  </body>
	  </html>
