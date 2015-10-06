<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Siswa</h2>
						<div class="box-icon">

							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>NIS</th>
								  <th>Nama</th>
								  <th>Alamat</th>
								  <th>Jk</th>
								  <th>No. Telp</th>
								  
								  <th>Aksi</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($siswa as $data_siswa){
							echo "<tr>
								<td>$no</td>
								<td>$data_siswa[nis]</td>
								<td class='center'>$data_siswa[nama_siswa]</td>
								<td class='center'>$data_siswa[alamat]</td>
								<td class='center'>$data_siswa[jk]</td>
								<td class='center'>$data_siswa[telp]</td>
								
								";
							?>
								
								<td class="center">
									<a class="btn btn-success" href="<?php echo base_url()."index.php/home/update_siswa/$data_siswa[id_siswa]"; ?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url()."index.php/operasi_daftar/hapus_siswa/$data_siswa[id_siswa]"; ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php $no++;} ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
