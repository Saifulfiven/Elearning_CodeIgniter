
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Quis</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			
			<form action="<?php $_SERVER['PHP_SELF']; ?>">
				<input type='number' name='jumlah' required>
				
				<input type='submit' value="Submit" class="btn btn-primary">
			</form>
			<?php
			error_reporting(0);
			$jumlah = $_GET['jumlah'];
			$judul_quis = $_GET['judul_quis'];
			?>
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/insert_quis_banyak";?>">
				<fieldset>
				<input type="hidden" name="id_mapel" value="<?php echo $id_mapel; ?>">
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Judul Quis</label>
					<div class="controls">
					  <input type="text" name="judul_quis" required>
					</div>
				  </div>
				  <?php
				for ($a=1; $a<= $jumlah; $a++){
					echo "<div class='control-group'>
							<label class='control-label' for='focusedInput'>Soal $a </label>
								<div class='controls'>
									<textarea name='soal[]' required></textarea>
								</div>
							</div>

							<div class='control-group'>
								<div class='controls'>
									A. <input type='text' name='a[]' required>
								</div>
							</div>
							<div class='control-group'>
								<div class='controls'>
									B. <input type='text' name='b[]' required>
								</div>
							</div>
							<div class='control-group'>
								<div class='controls'>
									C. <input type='text' name='c[]' required>
								</div>
							</div>
							<div class='control-group'>
								<div class='controls'>
									D. <input type='text' name='d[]' required>
								</div>
							</div>
							<div class='control-group'>
								<label class='control-label' for='focusedInput'>Kunci Jawaban</label>
								<div class='controls'>
									<select name='kunci[]'>
										<option value='A'>A</option>
										<option value='B'>B</option>
										<option value='C'>C</option>
										<option value='D'>D</option>
									</select>
								</div>
							</div>
							<br>

							";
				}
				?>
		

				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<input type="reset" class="btn" value="Batal">
				  </div>
				</fieldset>
			  </form>
			 
		</div>
	</div><!--/span-->
			
</div><!--/row-->