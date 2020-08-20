<script type="text/javascript">
	function cekform()
	{
		if(!$("#kode").val())
		{
			alert('Kode jadwal harus diisi cuy');
			$('#kode').focus()
			return false;
		}
		
		if(!$("#pelajaran").val())
		{
			alert('Pelajaran harus diisi cuy');
			$('#pelajaran').focus()
			return false;
		}


		if(!$("#guru").val())
		{
			alert('Guru harus diisi cuy');
			$('#guru').focus()
			return false;
		}

		if(!$("#kelas").val())
		{
			alert('Kelas harus diisi cuy');
			$('#tanggal_l').focus()
			return false;
		}

		if(!$("#hari").val())
		{
			alert('Hari harus diisi cuy');
			$('#hari').focus()
			return false;
		}

		if(!$("#waktu").val())
		{
			alert('Waktu harus diisi cuy');
			$('#waktu').focus()
			return false;
		}

		
	}

</script>


<?php 
$info = $this->session->flashdata('info');
if(!empty($info))
{
	echo $info;
}
?>

<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/jadwal/simpan" onsubmit="return cekform();">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Kode Jadwal</label>
		<div class="col-sm-3">
			<input type="text" name="kode" id="kode" placeholder="Kode Jadwal" class="form-control" value="<?php echo $kode; ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Pelajaran</label>
		<div class="col-sm-3">
			<select name="pelajaran" id="pelajaran" class="form-control">
				<option value="" > Pilih Pelajaran..... </option>
				<?php
				$pelajaran = $this->db->get('pelajaran');
				foreach ($pelajaran->result() as $row) {
				

				?>
				<option value="<?php echo $row->kd_pelajaran; ?>"><?php echo $row->nm_pelajaran; ?></option>
			<?php } ?>
			</select>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Guru</label>
		<div class="col-sm-3">
			<select name="guru" id="guru" class="form-control">
				<option value="" > Pilih Guru..... </option>
				<?php
				$guru = $this->db->get('guru');
				foreach ($guru->result() as $row) {
				

				?>
				<option value="<?php echo $row->nip; ?>"><?php echo $row->nm_guru; ?></option>
			<?php } ?>
			</select>
		</div>
	</div>

			<div class="form-group row">
		<label class="col-sm-2 col-form-label">Kelas</label>
		<div class="col-sm-3">
			<select name="kelas" id="kelas" class="form-control">
				<option value="" > Pilih Kelas..... </option>
				<?php
				$kelas = $this->db->get('kelas');
				foreach ($kelas->result() as $row) {
				

				?>
				<option value="<?php echo $row->kd_kelas; ?>"><?php echo $row->nm_kelas; ?></option>
			<?php } ?>
			</select>
		</div>
		</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Hari</label>
		<div class="col-sm-3">
			 <select name="hari" id="hari" class="form-control">
			 	<option value=""> Pilih Hari </option>
			  	<option value="<?php echo $hari = 'Volvo'; ?>">Senin</option>
			  	<option value="<?php echo $hari = 'Saab'; ?>">Selasa</option>
			  	<option value="<?php echo $hari = 'Opel'; ?>">Rabu</option>
			  	<option value="<?php echo $hari = 'Audi'; ?>">Kamis</option>
			  	<option value="<?php echo $hari = 'Jumat'; ?>">Jumat</option>
			  	<option value="<?php echo $hari = 'Sabtu'; ?>">Sabtu</option>
			</select> 
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Waktu</label>
		<div class="col-sm-3">
			 <select name="waktu" id="waktu" class="form-control">
			 	<option value=""> Pilih Waktu.... </option>
			  	<option value="<?php echo $waktu = '08.00-10.00'; ?>">08.00-10.00</option>
			  	<option value="<?php echo $waktu = '11.00-12.00'; ?>">11.00-12.00</option>
			  	<option value="<?php echo $waktu = '13.00-14.00'; ?>">13.00-14.00</option>
			</select> 
		</div>
	</div>


	</div>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<br>
<br>

<div>
	<button type="submit" class="btn btn-primary btn small">simpan</button>
	<a href="<?php echo base_url(); ?>index.php/jadwal" class="btn btn-primary btn small">tutup</a>
</div>

</form>