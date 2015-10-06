<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Matapelajaran</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/update_tugas";?>" enctype="multipart/form-data">
				<fieldset>
				  <input type="hidden" name="id_mapel" value="<?php echo $id_mapel; ?>">
				  <input type="hidden" name="id_tugas" value="<?php echo $id_tugas; ?>">
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Judul Tugas</label>
					<div class="controls">
					  <input type="text" name="judul_tugas" value="<?php echo $judul_tugas; ?>">
					</div>
				  </div>

				 <div class="control-group">
				 	<label class="control-label" for="focusedInput">File Tugas</label>
				 	<div class="controls">
				 		<input type="file" name="nama_file" class="input-file uniform-on">
				 	</div>
				  </div>
				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<input type="reset" class="btn" value="Batal">
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->
			
</div><!--/row-->