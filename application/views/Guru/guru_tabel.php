<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">

							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Nip</th>
								  <th>Nama</th>
								  <th>Alamat</th>
								  <th>Jk</th>
								  <th>Tgl Lahir</th>
								  <th>Akses</th>
								  <th>Aksi</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($guru as $data_guru){
							echo "<tr>
								<td>$no</td>
								<td>$data_guru[nip]</td>
								<td class='center'>$data_guru[nama]</td>
								<td class='center'>$data_guru[alamat]</td>
								<td class='center'>$data_guru[jk_guru]</td>
								<td class='center'>$data_guru[tgl_lahir]</td>
								<td class='center'>$data_guru[akses]</td>
								";
							?>
								
								<td class="center">
									<a class="btn btn-success" href="<?php echo base_url()."index.php/home/update_guru/$data_guru[id_guru]"; ?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url()."index.php/operasi_daftar/hapus_guru/$data_guru[id_guru]"; ?>">
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
