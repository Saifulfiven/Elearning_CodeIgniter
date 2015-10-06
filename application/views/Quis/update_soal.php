
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Soal</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/update_quis_soal";?>">
				<fieldset>
				<input type="hidden" name="id_soal" value="<?php echo $id_soal; ?>">
				<input type="hidden" name="id_quis" value="<?php echo $id_quis; ?>">
				  
					<div class='control-group'>
							<label class='control-label' for='focusedInput'>Soal</label>
								<div class='controls'>
									<textarea name='soal' required><?php echo $soal; ?></textarea>
								</div>
							</div>

							<div class='control-group'>
								<div class='controls'>
									A. <input type='text' name='a' value="<?php echo $a; ?>" required>
								</div>
							</div>
							<div class='control-group'>
								<div class='controls'>
									B. <input type='text' name='b' value="<?php echo $b; ?>" required>
								</div>
							</div>
							<div class='control-group'>
								<div class='controls'>
									C. <input type='text' name='c' value="<?php echo $c; ?>" required>
								</div>
							</div>
							<div class='control-group'>
								<div class='controls'>
									D. <input type='text' name='d' value="<?php echo $d; ?>"required>
								</div>
							</div>
							<div class='control-group'>
								<label class='control-label' for='focusedInput'>Kunci Jawaban</label>
								<div class='controls'>
									<select name='kunci'>
									<?php
									
									if ($kunci == "A"){
										echo "
										<option value='A' selected>A</option>
										<option value='B'>B</option>
										<option value='C'>C</option>
										<option value='D'>D</option>
									";
									}elseif ($kunci == "B"){
										echo "
											<option value='A'>A</option>
											<option value='B' selected>B</option>
											<option value='C'>C</option>
											<option value='D'>D</option>
										";
									}elseif ($kunci == "C"){
										echo "
											<option value='A'>A</option>
											<option value='B'>B</option>
											<option value='C' selected>C</option>
											<option value='D'>D</option>
										";
									}elseif ($kunci == "D"){
										echo "
											<option value='A'>A</option>
											<option value='B'>B</option>
											<option value='C'>C</option>
											<option value='D' selected>D</option>
										";
									}
									?>
									</select>
								</div>
							</div>
							<br>

				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<input type="reset" class="btn" value="Batal">
				  </div>
				</fieldset>
			  </form>
			 
		</div>
	</div><!--/span-->
			
</div><!--/row-->