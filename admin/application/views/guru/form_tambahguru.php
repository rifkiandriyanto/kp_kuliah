<script type="text/javascript">
	function cekform()
	{
		if(!$("#kode").val())
		{
			alert('Kode guru harus diisi');
			$('#kode').focus()
			return false;
		}
		
		if(!$("#nama").val())
		{
			alert('Nama harus diisi');
			$('#nama').focus()
			return false;
		}


		if(!$("#tempat_l").val())
		{
			alert('Tempat lahir harus diisi');
			$('#tempat_l').focus()
			return false;
		}

		if(!$("#tanggal_l").val())
		{
			alert('Tanggal lahir harus diisi');
			$('#tanggal_l').focus()
			return false;
		}

		if(!$("#alamat").val())
		{
			alert('Alamat harus diisi');
			$('#alamat').focus()
			return false;
		}

		if(!$("#notelp").val())
		{
			alert('No telpon harus diisi');
			$('#notelp').focus()
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

<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/guru/simpan" onsubmit="return cekform();">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">NIP</label>
		<div class="col-sm-3">
			<input type="text" name="kode" id="kode" placeholder="NIP" class="form-control" value="<?php echo $kode; ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nama Guru</label>
		<div class="col-sm-3">
			<input type="text" name="nama" id="nama" placeholder="Nama Guru" class="form-control" value="<?php echo $nama; ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Jabatan</label>
		<div class="col-sm-3">
			 <select name="jabatan" id="jabatan" class="form-control">
			 	<option value=""> Pilih Jabatan </option>
			  	<option value="<?php echo $jabatan = 'Volvo'; ?>">Volvo</option>
			  	<option value="<?php echo $jabatan = 'Saab'; ?>">Saab</option>
			  	<option value="<?php echo $jabatan = 'Opel'; ?>">Opel</option>
			  	<option value="<?php echo $jabatan = 'Audi'; ?>">Audi</option>
			</select> 
		</div>
	</div>


	<div class="form-group row">
		<label class="col-sm-2 col-form-label" >Jenis Kelamin</label>

			<div class="col-sm-1">
			<label>
			<input name="jk" id="jk" type="radio" class="form-control" value="<?php echo $jk ='Laki-laki'; ?>" >
			<span class="lbl">Laki-laki</span>
			</label>
			</div>
			
			<div class="col-sm-1">
			<label>
			<input name="jk" id="jk" type="radio" class="form-control" value="<?php echo $jk ='Perempuan'; ?>" >
			<span class="lbl">Perempuan</span>
			</label>
			</div>
	</div>




	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Tempat Lahir</label>
		<div class="col-sm-3">
			<input type="text" name="tempat_l" id="tempat_l" placeholder="Tempat Lahir" class="form-control" value="<?php echo $tempat_l; ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
		<div class="col-sm-3">
			  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
			  <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script>
			  <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
			  <script>
			  $( function() {
			    $( "#tanggal_l" ).datepicker();
			  } );
			  </script>

			<p> <input type="text" name="tanggal_l" id="tanggal_l" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $tanggal_l; ?>"> </p>
		</div>
	</div>


	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Alamat Rumah</label>
		<div class="col-sm-3">
			<textarea  rows="5" cols="40" name="alamat" id="alamat" placeholder="Alamat Rumah" class="form-control" value="<?php echo $alamat; ?>"></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nomor Telpon</label>
		<div class="col-sm-3">
			<input type="text" name="notelp" id="notelp" placeholder="Nomor Telpon" class="form-control"value="<?php echo $notelp; ?>">
		</div>
	</div>


	</div>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<br>

<div>
	<button type="submit" class="btn btn-primary btn small">Simpan</button>
	<a href="<?php echo base_url(); ?>index.php/guru" class="btn btn-primary btn small">Tutup</a>
</div>

</form>