<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Kelas</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/do_update_kelas";?>">
				<fieldset>
				  <input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>">
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Kelas</label>
					<div class="controls">
					  <input type="text" name="kd_kelas" value="<?php echo $kd_kelas; ?>">
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