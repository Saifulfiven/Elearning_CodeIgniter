<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Kelas di Matapelajaran</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/do_update_kelas_mapel";?>">
				<fieldset>
				  <input type="hidden" name="id_diajarkan" value="<?php echo $id_diajarkan; ?>">
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Kelas</label>
					<div class="controls">
					  <select name="id_kelas" data-rel="chosen">
					  	<?php 
					  		foreach($semua_kelas as $semua_kelas){
					  			if ($id_kelas == $semua_kelas['id_kelas']){
						  			echo "<option value='$semua_kelas[id_kelas]' selected>$semua_kelas[kd_kelas]</option>";
					  			}else{
					  				echo "<option value='$semua_kelas[id_kelas]''>$semua_kelas[kd_kelas]</option>";
					  			}
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