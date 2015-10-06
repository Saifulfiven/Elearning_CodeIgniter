<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Matapelajaran</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/insert_mapel";?>">
				<fieldset>
				  
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Matapelajaran</label>
					<div class="controls">
					  <input type="text" name="nama_mapel">
					</div>
				  </div>

				  <div class="control-group">
				  	<label class="control-label" for="focusedInput">Nama Guru</label>
				  	<div class="controls">
				  		
				  		<select name="id_guru" data-rel="chosen">
				  			<?php
				  			foreach($guru as $gurunya){
				  				echo "<option value='$gurunya[id_guru]'>$gurunya[nama]</option>";
				  			}
				  			?>
				  		</select>				  
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