<form method="post" action="">

<p><div class="form-group row">
		<label class="col-sm-2 col-form-label">Kelas</label>
		<div class="col-sm-3">
			<select name="kd_kelas" id="kd_kelas" class="form-control">
				<option value="" > Pilih Kelas..... </option>
				 <?php
				 include "koneksi.php";
				 $a="SELECT * FROM kelas";
				 $sql=mysql_query($a);
				 while($data=mysql_fetch_array($sql)){
				 ?>
				<option value="<?php echo $data['kd_kelas']?>"><?php echo $data['nm_kelas']?></option>
			<?php } ?>
			</select>
		</div>
</p></div>


<p>
 <input type="submit"  class="btn btn-primary btn-small" value="pilih" />
</p>


 </form>

<table id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Nilai</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Nama Pelajaran</th>
			<th>Bobot</th>
			<th>Nama Guru</th>
			<th>Nilai</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			 <?php
			 $no = 1;
			 include "koneksi.php";
			 if(isset($_POST['kd_kelas'])){
			 $sql = "SELECT
						nilai.kd_nilai,
						siswa.nm_siswa,
						kelas.nm_kelas,
						pelajaran.nm_pelajaran,
						pelajaran.bobot,
						guru.nm_guru,
						nilai.nilai
						FROM
						nilai ,
						pelajaran ,
						siswa ,
						guru ,
						kelas
						WHERE
						nilai.kd_pelajaran = pelajaran.kd_pelajaran AND
						nilai.nis = siswa.nis AND
						siswa.kd_kelas = kelas.kd_kelas AND
						nilai.nip = guru.nip AND
						siswa.kd_kelas = ".$_POST['kd_kelas'];


			 $q = mysql_query($sql);
			 while($data = mysql_fetch_array($q)){
			 ?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data[kd_nilai] ; ?></td>
			<td><?php echo $data[nm_siswa] ; ?></td>
			<td><?php echo $data[nm_kelas] ; ?></td>
			<td><?php echo $data[nm_pelajaran] ; ?></td>
			<td><?php echo $data[bobot] ; ?></td>
			<td><?php echo $data[nm_guru] ; ?></td>
			<td><?php echo $data[nilai] ; ?></td>

		</tr>
	<?php }
	} ?>
	</tbody>
</table>