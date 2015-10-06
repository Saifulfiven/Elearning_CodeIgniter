<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Guru</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/insert_guru";?>">
				<fieldset>
				  
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Nama Lengkap</label>
					<div class="controls">
					  <input type="text" name="nama_lengkap">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="focusedInput">NIP</label>
					<div class="controls">
					  <input type="text" name="nip">
					</div>
				  </div>
				  	
				  	<div class="control-group">
						<label class="control-label" for="selectError3">Jenis Kelamin</label>
						<div class="controls">
						  <select name="jk_guru">
							  <option value="Laki-laki">Laki - laki</option>
							  <option value="Perempuan">Perempuan</option>
							

						  </select>
						</div>
				    </div>

				    <div class="control-group">
				    	<label class="control-label" for="focusedInput">Tanggal Lahir</label>
				    	<div class="controls">
				    		<input type="date" name="tgl_lahir" required>
				    	</div>
				    </div>

				  	<div class="control-group">
						<label class="control-label" for="focusedInput">Alamat</label>
						<div class="controls">
						  <textarea name="alamat"></textarea>
						</div>
				  	</div>	

				  	<div class="control-group">
						<label class="control-label" for="selectError3">Akses</label>
						<div class="controls">
						  <select name="akses">
							  <option value="Administrator">Administrator</option>
							  <option value="Guru">Guru</option>
							

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