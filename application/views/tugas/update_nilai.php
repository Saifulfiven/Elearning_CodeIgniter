<?php echo "<h3 style='color:red'>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Nilai</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/update_nilaitugas";?>">
				<fieldset>
				<input type="hidden" name="id_tugas_nilai" value="<?php echo $id_tugas_nilai;?>">
				<input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>">
				<input type="hidden" name="id_tugas" value="<?php echo $id_tugas; ?>">
			 	<div class='control-group'>
					<label class='control-label' for='selectError'>Nilai</label> 
					<div class='controls'> <input type='number' name='nilai' value="<?php echo $nilai; ?>"> </div>
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