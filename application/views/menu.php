<!-- start: Main Menu -->
<?php 
	if ($akses == "Administrator"){?>
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url()."index.php/home/";?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home</span></a></li>	
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> User</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url()."index.php/home/form_siswa";?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Siswa</span></a></li>
								<li><a class="submenu" href="<?php echo base_url()."index.php/home/form_guru";?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Guru</span></a></li>
							</ul>	
						</li>
						<li><a href="<?php echo base_url()."index.php/home/form_kelas";?>"><i class="icon-edit"></i><span class="hidden-tablet"> Kelas</span></a></li>
						<li><a href="<?php echo base_url()."index.php/home/form_mapel";?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Matapelajaran</span></a></li>
						<li><a href="<?php echo base_url()."index.php/home/form_tugas";?>"><i class="icon-calendar"></i><span class="hidden-tablet"> Tugas</span></a></li>
						<li><a href="<?php echo base_url()."index.php/home/form_materi";?>"><i class="icon-calendar"></i><span class="hidden-tablet"> Upload Materi</span></a></li>
						<li><a href="<?php echo base_url()."index.php/home/form_quis";?>"><i class="icon-calendar"></i><span class="hidden-tablet"> Quis</span></a></li>
						<li><a href="<?php echo base_url()."index.php/login/logout";?>"><i class="icon-lock"></i><span class="hidden-tablet">Keluar</span></a></li>
					</ul>
				</div>
			</div>
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			<!-- end: Main Menu -->
		<?php }else{ ?>
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url()."index.php/home/";?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home</span></a></li>	
						<li><a href="<?php echo base_url()."index.php/home/daftar_kelas_mapel/$id_mapel";?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Matapelajaran</span></a></li>
						<li><a href="<?php echo base_url()."index.php/home/list_tugas/$id_mapel";?>"><i class="icon-calendar"></i><span class="hidden-tablet"> Tugas</span></a></li>
						<li><a href="<?php echo base_url()."index.php/home/list_materi/$id_mapel";?>"><i class="icon-calendar"></i><span class="hidden-tablet"> Upload Materi</span></a></li>
						<li><a href="<?php echo base_url()."index.php/home/list_quis/$id_mapel";?>"><i class="icon-calendar"></i><span class="hidden-tablet"> Quis</span></a></li>
						<li><a href="<?php echo base_url()."index.php/login/logout";?>"><i class="icon-lock"></i><span class="hidden-tablet">Keluar</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
		<?php } ?>