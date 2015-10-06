<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Siswa di Kelas <b><?php echo $kd_kelas; ?> </b></h2>
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
								  <th>Nama Siswa</th>
								  <th>Jenis Kelamin</th>
								  <?php
								  if ($akses == "Administrator"){
								  	echo "<th>Aksi</th>";
								   }else{
										echo "";
								   }
								   ?>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($kelas_siswa as $data_kelas_siswa){
							echo "<tr>
								<td>$no</td>
								<td class='center'>$data_kelas_siswa[nis]</td>
								<td class='center'>$data_kelas_siswa[nama_siswa]</td>
								<td class='center'>$data_kelas_siswa[jk]</td>
								";
								if ($akses == "Administrator"){
							?>								
								<td class="center">
									<a class="btn btn-success" href="<?php echo base_url()."index.php/home/update_kelas_siswa/$data_kelas_siswa[id_daftar_siswa]"; ?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url()."index.php/operasi_daftar/hapus_kelas_siswa/$data_kelas_siswa[id_daftar_siswa]"; ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
								<?php }else{
									echo "";
								}?>
							</tr>
							<?php $no++;} ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
