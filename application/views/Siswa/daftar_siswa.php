<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Siswa</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/insert_siswa";?>">
				<fieldset>
				 
							  
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Nama Lengkap</label>
					<div class="controls">
					  <input type="text" name="nama_siswa">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="focusedInput">NIS</label>
					<div class="controls">
					  <input type="text" name="nis">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="focusedInput">No. HP</label>
					<div class="controls">
					  <input type="text" name="telp">
					</div>
				  </div>
				  	
				  	<div class="control-group">
						<label class="control-label" for="selectError3">Jenis Kelamin</label>
						<div class="controls">
						  <select name="jk">
							  <option value="Laki-laki">Laki - laki</option>
							  <option value="Perempuan">Perempuan</option>
							

						  </select>
						</div>
				    </div>

				  	<div class="control-group">
						<label class="control-label" for="focusedInput">Alamat</label>
						<div class="controls">
						  <textarea name="alamat"></textarea>
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