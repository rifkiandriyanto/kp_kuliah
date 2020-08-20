<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  null, null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
		
			    } );
			})
		</script>

<p>
<a href="<?php echo base_url(); ?>index.php/pelajaran/tambah" class="btn btn-primary btn-small">Tambah Data Pelajaran</a>
</p>

<table id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th class ="center" >Kode</th>
			<th>Nama Pelajaran</th>
			<th>Bobot</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no = 1;
			foreach ($data->result() as $row) {
			?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->kd_pelajaran ; ?></td>
			<td><?php echo $row->nm_pelajaran ; ?></td>
			<td><?php echo $row->bobot ; ?></td>
			<td> 
				<a href="<?php echo base_url() ?>index.php/pelajaran/edit/<?php echo $row->kd_pelajaran; ?>">edit</a>
				<a href="<?php echo base_url() ?>index.php/pelajaran/delete/<?php echo $row->kd_pelajaran; ?>" onclick="return confirm('cuy yakin mau ngapus data ini?')">delete</a>
			</td>
			
		</tr>
	<?php } ?>
	</tbody>
</table>