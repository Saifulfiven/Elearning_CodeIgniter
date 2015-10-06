<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Soal</h2>
						<div class="box-icon">

							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Soal</th>
								  <th>Kunci Jawaban</th>
								  <th>Aksi</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($soal as $data_soal){
						  	$kucing = substr($data_soal['soal'],0,30);
							echo "<tr>
								<td>$no</td>
								<td>$kucing</td>
								<td>$data_soal[kunci]</td>
								";
								?>
								<td class="center">
									<a class="btn btn-success" href="<?php echo base_url()."index.php/home/update_soal_quis/$id_quis/$data_soal[id_soal]";?>">
										<i class="halflings-icon white zoom-in"></i></a>
									<a class="btn btn-danger" href="<?php echo base_url()."index.php/operasi_daftar/hapus_soal_quis/$id_quis/$data_soal[id_soal]";?>">
										<i class="halflings-icon white zoom-in"></i></a>
								</td>								
							</tr>
							<?php $no++;} ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
