<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Materi</h2>
						<div class="box-icon">

							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Judul Materi</th>
								  <th>Nama File</th>
								  <th>Waktu</th>
								  <th>Aksi</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($list_materi as $data_listmateri){
							echo "<tr>
								<td>$no</td>
								<td>$data_listmateri[judul_materi]</td>
								<td>$data_listmateri[nama_file]</td>
								<td>$data_listmateri[waktu]</td>";
								?>
								 <td>
								<a class="btn btn-success" href="<?php echo base_url()."index.php/home/update_materi/$data_listmateri[id_materi]";?>">
										<i class="halflings-icon white zoom-in"></i></a>
								<a class="btn btn-danger" href="<?php echo base_url()."index.php/operasi_daftar/hapus_materi/$data_listmateri[id_mapel]/$data_listmateri[id_materi]";?>">
										<i class="halflings-icon white zoom-in"></i></a>
								</td>
								
							</tr>
							<?php $no++;} ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
