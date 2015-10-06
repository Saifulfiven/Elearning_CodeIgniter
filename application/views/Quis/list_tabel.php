<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Quis</h2>
						<div class="box-icon">

							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Judul Quis</th>
								  <th>Waktu</th>
								  <th>Aksi</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($list_quis as $data_listquis){
							echo "<tr>
								<td>$no</td>
								<td>
								";?>

								<a href="<?php echo base_url()."index.php/home/daftar_soal_quis/$data_listquis[id_quis]";?>"><?php echo $data_listquis['judul_quis']; ?></a></td>
								<td><?php echo $data_listquis['tgl_upload']; ?></td>
								
								 <td>
								<a class="btn btn-success" href="<?php echo base_url()."index.php/home/update_quis/$data_listquis[id_quis]";?>">
										<i class="halflings-icon white zoom-in"></i></a>
								<a class="btn btn-danger" href="<?php echo base_url()."index.php/operasi_daftar/hapus_quis/$data_listquis[id_quis]/$data_listquis[id_mapel]";?>">
										<i class="halflings-icon white zoom-in"></i></a>
								</td>
								
							</tr>
							<?php $no++;} ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
