<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Guru</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/do_update_guru";?>">
				<fieldset>
				  <input type="hidden" name="id_guru" value="<?php echo $id_guru; ?>">
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Nama Lengkap</label>
					<div class="controls">
					  <input type="text" name="nama_lengkap" value="<?php echo $nama; ?>">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="focusedInput">NIP</label>
					<div class="controls">
					  <input type="text" name="nip" value="<?php echo $nip; ?>">
					</div>
				  </div>
				  	
				  	<div class="control-group">
						<label class="control-label" for="selectError3">Jenis Kelamin</label>
						<div class="controls">
						  <select name="jk_guru">
							  <?php 
						  	if ($jk_guru == "Laki-laki"){
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
				    <input type="hidden" name="tgl_lahirx" value="<?php echo $tgl_lahir; ?>">
				    <div class="control-group">
				    	<label class="control-label" for="focusedInput">Tanggal Lahir</label>
				    	<div class="controls">
				    		<input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" required>
				    	</div>
				    </div>

				  	<div class="control-group">
						<label class="control-label" for="focusedInput">Alamat</label>
						<div class="controls">
						  <textarea name="alamat"><?php echo $alamat; ?></textarea>
						</div>
				  	</div>				  	

				  	<div class="control-group">
						<label class="control-label" for="selectError3">Akses</label>
						<div class="controls">
						  <select name="akses">
							  <?php 
						  	if ($hak_akses == "Administrator"){
							echo "<option value='Administrator' selected>Administrator</option>
								  <option value='Guru'>Guru</option>";
							}else{
								echo "<option value='Administrator'>Administrator</option>
									  <option value='Guru' selected>Guru</option>
								  	  ";
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