<!DOCTYPE html>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Data Penduduk Laki-laki
                        <strong>KADURAMA</strong>
						
					</h2>
                    <hr>
                </div>
					<head>
	<link href="css/table.css" rel='stylesheet' type='text/css' />
</head>
<?php
include "koneksi.php";
$query = mysql_query("SELECT * FROM penduduk");
echo"<table width=98% align=center class=datatabel>";
?>
				
	<tr>
	<th class="th">No</th>
	<th class="th">NIK</th>
	<th class="th">Nama</th>
	<th class="th">Tempat/Tgl Lahir</th>
	<th class="th">Jenis Kelamin</th>
	<th class="th">Alamat</ths>
	<th class="th">Agama</th>
	<th class="th">Status</th>
	<th class="th">Pekerjaan</th>
	<th class="th">Kewarganegaraan</th>
	<th class="th">AKSI</th>
</tr>

<?php
	$i=0;
	$query=mysql_query("SELECT * FROM penduduk where jenis_kelamin = 'Perempuan'");
	
	while ($hasil=mysql_fetch_array($query))
	{ $i++;
	echo "<tr>
			<td class=td align=center>$i</td>
			<td class=td align=center>$hasil[nik]</td>
			<td class=td align=center>$hasil[nama]</td>		
			<td class=td align=center>$hasil[tempat]</td>
			<td class=td align=center>$hasil[jenis_kelamin]</td>
			<td class=td align=center>$hasil[alamat]</td>
			<td class=td align=center>$hasil[agama]</td>
			<td class=td align=center>$hasil[status]</td>
			<td class=td align=center>$hasil[pekerjaan]</td>
			<td class=td align=center>$hasil[kwrg]</td>
				
			
			<td class=td align=center><a href=edit_penduduk.php?id=$hasil[nik]>EDIT</a>
			<a href=hapus_penduduk.php?id=$hasil[nik]>HAPUS</a></td>
		  </tr>";
	}
	?>

<td colspan= "33%"  class="td" align="center"> <a href="?page=penduduk_lakilaki">Tampil Penduduk Laki-laki</a></td>
</tr>
<tr>
<td colspan= "33%"  class="td" align="center"> <a href="?page=penduduk_perempuan">Tampil Penduduk Perempuan</a></td>
</tr>
<tr>
<td colspan= "33%" class="td" align="center"> <a href="?page=input_penduduk">Input Data Penduduk</center></a></td></tr>
 <tr>

</table>

