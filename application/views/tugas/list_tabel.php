<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Tugas <?php echo $hitung; ?></h2>
						<div class="box-icon">

							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Judul Tugas</th>
								  <th>Nama File</th>
								  <th>Waktu</th>
								  <th>Aksi</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($list_tugas as $data_listtugas){
							echo "<tr>
								<td>$no</td>
								<td>$data_listtugas[judul_tugas]</td>
								<td>$data_listtugas[nama_file]</td>
								<td>$data_listtugas[waktu]</td>";
								?>
								 <td>
								<a class="btn btn-success" href="<?php echo base_url()."index.php/home/update_tugas/$data_listtugas[id_tugas]";?>">
										<i class="halflings-icon white zoom-in"></i></a>
								<a class="btn btn-danger" href="<?php echo base_url()."index.php/operasi_daftar/hapus_tugas/$data_listtugas[id_mapel]/$data_listtugas[id_tugas]";?>">
										<i class="halflings-icon white trash"></i></a>
								<a class="btn btn-primary" href="<?php echo base_url()."index.php/home/kelas_tugas/$id_mapel/$data_listtugas[id_tugas]";?>">Lihat Nilai</a>
								</td>
								
							</tr>
							<?php $no++;} ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
