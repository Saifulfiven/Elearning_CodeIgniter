<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Kelas di Matapelajaran <b><?php echo $nama_mapel; ?> </b></h2>
						<div class="box-icon">

							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Nama Kelas</th>
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
						  foreach ($kelas_mapel as $data_kelas_mapel){
							echo "<tr>
								<td>$no</td>
								<td class='center'>";
								?>
								<a href="<?php echo base_url()."index.php/home/daftar_kelas_siswa/$data_kelas_mapel[id_kelas]";?>">
								<?php echo $data_kelas_mapel['kd_kelas']; ?></a></td>
								<td><a class="btn btn-success" href="<?php echo base_url()."index.php/home/nilai_siswa/$data_kelas_mapel[id_kelas]/$id_tugas";?>">Nilai</a></td>
							</tr>
							<?php $no++;} ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
