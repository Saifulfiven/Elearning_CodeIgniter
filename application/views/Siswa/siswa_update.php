<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form siswa</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/do_update_siswa";?>">
				<fieldset>
				  <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>">
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Nama Lengkap</label>
					<div class="controls">
					  <input type="text" name="nama_siswa" value="<?php echo $nama; ?>">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="focusedInput">NIS</label>
					<div class="controls">
					  <input type="text" name="nis" value="<?php echo $nis; ?>">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="focusedInput">No. Telp</label>
					<div class="controls">
					  <input type="text" name="telp" value="<?php echo $telp; ?>">
					</div>
				  </div>
				  	
				  	<div class="control-group">
						<label class="control-label" for="selectError3">Jenis Kelamin</label>
						<div class="controls">
						  <select name="jk">
							  <?php 
						  	if ($jk == "Laki-laki"){
							echo "<option value='Laki-laki' selected>Laki - laki</option>
								  <option value='Perempuan'>Perempuan</option>";
							}else{
								echo "<option value='Laki-laki'>Laki-laki</option>
									  <option value='Perempuan' selected>Perempuan</option>
								  	  ";
							}
							?>
						  </select>
						</div>
				    </div>

				  	<div class="control-group">
						<label class="control-label" for="focusedInput">Alamat</label>
						<div class="controls">
						  <textarea name="alamat"><?php echo $alamat; ?></textarea>
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