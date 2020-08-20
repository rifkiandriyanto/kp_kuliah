<script type="text/javascript">
	function cekform()
	{
		if(!$("#kode").val())
		{
			alert('Kode nilai harus diisi cuy');
			$('#kode').focus()
			return false;
		}
		
		if(!$("#siswa").val())
		{
			alert('Siswa harus diisi cuy');
			$('#siswa').focus()
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

		if(!$("#nilai").val())
		{
			alert('Nilai harus diisi cuy');
			$('#nilai').focus()
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

<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/nilai/simpan" onsubmit="return cekform();">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Kode nilai</label>
		<div class="col-sm-3">
			<input type="text" name="kode" id="kode" placeholder="Kode Jadwal" class="form-control" value="<?php echo $kode; ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Siswa</label>
		<div class="col-sm-3">
			<select name="siswa" id="siswa" class="form-control">
				<option value="" > Pilih Siswa..... </option>
				<?php
				$siswa = $this->db->get('siswa');
				foreach ($siswa->result() as $row) {
				

				?>
				<option value="<?php echo $row->nis; ?>"><?php echo $row->nm_siswa; ?></option>
			<?php } ?>
			</select>
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
		<label class="col-sm-2 col-form-label">Nilai</label>
		<div class="col-sm-3">
			<input type="text" name="nilai" id="nilai" placeholder="Nilai" class="form-control" value="<?php echo $nilai; ?>">
		</div>
	</div>

	</div>
<br>
<br>

<div>
	<button type="submit" class="btn btn-primary btn small">Simpan</button>
	<a href="<?php echo base_url(); ?>index.php/nilai" class="btn btn-primary btn small">Tutup</a>
</div>

</form>