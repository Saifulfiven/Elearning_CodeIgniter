<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Matapelajaran</h2>
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
								  <th>Nama Matapelajaran</th>
								  <th>Nama Guru</th>
								  <th>Aksi</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($mapel as $data_mapel){
							echo "<tr>
								<td>$no</td>
								<td>$data_mapel[nip]</td>
								<td>";
								?>
								<a href="<?php echo base_url()."index.php/home/daftar_kelas_mapel/$data_mapel[id_mapel]";?>"><?php echo $data_mapel['nama_mapel']; ?></a></td>
								<?php
								echo "
								<td>$data_mapel[nama]</td>
								";?>
								
								
								<td class="center">
									<a class="btn btn-success" href="<?php echo base_url()."index.php/home/update_mapel/$data_mapel[id_mapel]"; ?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url()."index.php/operasi_daftar/hapus_mapel/$data_mapel[id_mapel]"; ?>">
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
