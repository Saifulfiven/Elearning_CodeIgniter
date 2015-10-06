<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function menu(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			error_reporting(0);
			$session = $this->session->userdata('logged_in');
			if ($session['akses'] == "Guru"){
				$nip   = $session['password'];
				$idnya = $this->mymodel->tam_data_gabung('mapel.id_mapel','mapel,guru',"where mapel.id_guru = guru.id_guru and guru.nip = $nip");
				$idenya = $idnya[0]['id_mapel'];
			}

			$data = array(
				"akses"		=> $session['akses'],
				"id_mapel"	=> $idenya,
			);

			$this->load->view('menu.php',$data,true);
		}else{

		}
		
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"menu"		=> $this->menu(),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"namax"  	=> $session['username'],
			);
			$this->load->view('index.php',$data);
		}else{
			redirect('login','refresh');
		}
	}

	public function form_guru(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"guru" 		=> $this->mymodel->tam_data('guru'),
				
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> $this->load->view('guru/tombol.php',"",true),
				"update"	=> "",
				"tabel" 	=> $this->load->view('guru/guru_tabel.php',$data,true)
			);
			$this->load->view('guru/form_guru.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	public function tambah_guru(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"guru" =>$this->mymodel->tam_data('guru')
			);
			$dota = "";
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('guru/daftar_guru.php',$dota,true),
				"tabel" => $this->load->view('guru/guru_tabel.php',$data,true)
			);
			$this->load->view('guru/form_guru.php',$isi);
		}else{
			redirect('login','refresh');
		}
	}

	public function update_guru($id_guru){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$go = $this->mymodel->tam_data('guru',"WHERE id_guru = $id_guru");
			$data1 = array(
				"guru" =>$this->mymodel->tam_data('guru')
			);
			$data = array(
				"id_guru"	=> $go[0]['id_guru'],
				"nip"		=> $go[0]['nip'],
				"nama"		=> $go[0]['nama'],
				"alamat"	=> $go[0]['alamat'],
				"jk_guru"	=> $go[0]['jk_guru'],
				"tgl_lahir"	=> $go[0]['tgl_lahir'],
				"hak_akses" => $go[0]['akses']
			);

			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('guru/guru_update.php',$data,true),
				"tabel" 	=> $this->load->view('guru/guru_tabel.php',$data1,true)
			);
			$this->load->view('guru/form_guru.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	//---------Siswa-------------
	public function form_siswa(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"siswa" =>$this->mymodel->tam_data('siswa')
			);

			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> $this->load->view('siswa/tombol.php',"",true),
				"update"=> "",
				"tabel" => $this->load->view('Siswa/siswa_tabel.php',$data,true)
			);
			$this->load->view('Siswa/form_Siswa.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_siswa(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"siswa" =>$this->mymodel->tam_data('siswa')
				
			);
			$dota = array(
				"kelas"	=> $this->mymodel->tam_data('kelas')
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('siswa/daftar_siswa.php',$dota,true),
				"tabel" => $this->load->view('siswa/siswa_tabel.php',$data,true)
			);
			$this->load->view('Siswa/form_siswa.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_siswa($id_siswa){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$go = $this->mymodel->tam_data('siswa',"WHERE id_siswa = $id_siswa");

			$data1 = array(
				"siswa" =>$this->mymodel->tam_data('siswa')
			);
			$data = array(
				"id_siswa"	=> $go[0]['id_siswa'],
				"nis"		=> $go[0]['nis'],
				"nama"		=> $go[0]['nama_siswa'],
				"alamat"	=> $go[0]['alamat'],
				"jk"		=> $go[0]['jk'],
				"telp"		=> $go[0]['telp'],
				
				"kelasz"		=> $this->mymodel->tam_data('kelas')
			);

			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('Siswa/siswa_update.php',$data,true),
				"tabel" 	=> $this->load->view('Siswa/siswa_tabel.php',$data1,true)
			);
			$this->load->view('Siswa/form_siswa.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	//---------Penambahan Kelas-------------
	public function form_kelas(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$data = array(
				"kelas" =>$this->mymodel->tam_data('kelas')
			);

			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> $this->load->view('Kelas/tombol.php',"",true),
				"update"=> "",
				"tabel" => $this->load->view('Kelas/kelas_tabel.php',$data,true)
			);
			$this->load->view('kelas/form_kelas.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_kelas(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$data = array(
				"kelas" =>$this->mymodel->tam_data('kelas')
			);
			$dota = "";
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('kelas/daftar_kelas.php',$dota,true),
				"tabel" => $this->load->view('kelas/kelas_tabel.php',$data,true)
			);
			$this->load->view('kelas/form_kelas.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_kelas($id_kelas){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$go = $this->mymodel->tam_data('kelas',"WHERE id_kelas = $id_kelas");
			$data1 = array(
				"kelas" =>$this->mymodel->tam_data('kelas')
			);
			$data = array(
				"id_kelas"	=> $go[0]['id_kelas'],
				"kd_kelas"	=> $go[0]['kd_kelas'],
			);

			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('kelas/kelas_update.php',$data,true),
				"tabel" 	=> $this->load->view('kelas/kelas_tabel.php',$data1,true)
			);
			$this->load->view('Kelas/form_kelas.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	//---------Daftar Siswa di Kelas-------------
	public function daftar_kelas_siswa($id_kelas){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$meong = $this->mymodel->tam_data('kelas',"WHERE kelas.id_kelas = $id_kelas");

			$data = array(
				"kelas_siswa" => $this->mymodel->tam_data('siswa_kelas,siswa,kelas',"WHERE siswa_kelas.id_kelas = kelas.id_kelas 
								AND siswa_kelas.id_siswa = siswa.id_siswa AND siswa_kelas.id_kelas = $id_kelas"),
				"kd_kelas"	  => $meong[0]['kd_kelas'],
				"akses"		  => $session['akses']
				
			);
			$dat = array('datanya' => $id_kelas);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);
			if ($session['akses'] == "Administrator"){
				$isi = array(
					"menu"		=> $this->menu(),
					"header" 	=> $this->load->view('header.php',$namanya,true),
					"tombol"	=> $this->load->view('Kelas_siswa/tombol.php',$dat,true),
					"update"	=> "",
					"tabel" 	=> $this->load->view('Kelas_siswa/kelas_siswa_tabel.php',$data,true)
				);
			}else{
				$isi = array(
					"menu"		=> $this->menu(),
					"header" 	=> $this->load->view('header.php',$namanya,true),
					"tombol"	=> "",
					"update"	=> "",
					"tabel" 	=> $this->load->view('Kelas_siswa/kelas_siswa_tabel.php',$data,true)
				);
			}
			$this->load->view('kelas_siswa/form_kelas_siswa.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_kelas_siswa($id_kelas){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"kelas_siswa" =>$this->mymodel->tam_data('siswa_kelas,siswa,kelas',"WHERE siswa_kelas.id_kelas = kelas.id_kelas 
								AND siswa_kelas.id_siswa = siswa.id_siswa AND siswa_kelas.id_kelas = $id_kelas")
			);
			$dota = array(
				"semua_siswa" => $this->mymodel->tam_data('siswa'),
				"id_kelas"	  => $id_kelas	
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('kelas_siswa/daftar_kelas_siswa.php',$dota,true),
				"tabel" => "",
			);
			$this->load->view('kelas_siswa/form_kelas_siswa.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_kelas_siswa($id_daftar_siswa){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			//$gok = $this->mymodel->tam_data('siswa_kelas',"WHERE id_daftar_siswa = $id_daftar_siswa");

			$data1 = array(
				"kelas_siswa" 	  => $this->mymodel->tam_data('kelas'),
				"id_daftar_siswa" => $id_daftar_siswa
			);
			
		/*
			$data = array(
				"id_kelas"	=> $gok[0]['id_kelas'],
				"kd_kelas"	=> $gok[0]['kd_kelas']
			);
		*/
			$data = array();
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('kelas_siswa/kelas_siswa_update.php',$data1,true),
				"tabel"		=> ""
				//"tabel" 	=> $this->load->view('kelas_siswa/kelas_siswa_tabel.php',$data1,true)
			);
			$this->load->view('Kelas_siswa/form_kelas_siswa.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	//---------Penambahan Mapel-------------
	public function form_mapel(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$data = array(
				"mapel" =>$this->mymodel->tam_data('mapel,guru','where mapel.id_guru = guru.id_guru')
			);

			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> $this->load->view('Mapel/tombol.php',"",true),
				"update"=> "",
				"tabel" => $this->load->view('Mapel/mapel_tabel.php',$data,true)
			);
			$this->load->view('Mapel/form_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_mapel(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$data = array(
				"mapel" =>$this->mymodel->tam_data('mapel,guru','where mapel.id_guru = guru.id_guru')
			);
			$dota = array(
				"guru" => $this->mymodel->tam_data('guru')
			);
			
			if ($session['akses'] == "Guru"){
				$nip = $session['password'];
				$idnya = $this->mymodel->tam_data('mapel,guru',"where mapel.id.guru = guru.id_guru and guru.nip = $nip");

				$idnya[0]['id_mapel'];
			}

			$aksesnya = array(
				"akses"	=> $session['akses'],
				"id_mapel"	=> $idnya[0]['id_mapel'],
			);



			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('mapel/daftar_mapel.php',$dota,true),
				"tabel" => $this->load->view('mapel/mapel_tabel.php',$data,true)
			);
			$this->load->view('mapel/form_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_mapel($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$go = $this->mymodel->tam_data('mapel',"WHERE id_mapel = $id_mapel");
			/*$data1 = array(
				"mapel" =>$this->mymodel->tam_data('mapel')
			);
			*/
			$data = array(
				"id_mapel"		=> $id_mapel,
				"nama_mapelx"	=> $go[0]['nama_mapel'],
				"id_guru"		=> $go[0]['id_guru']
			);


			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('mapel/mapel_update.php',$data,true),
				"tabel" 	=> "",
			);
			$this->load->view('mapel/form_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	//---------Daftar Kelas di Matapelajaran-------------
	public function daftar_kelas_mapel($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

				/*"kelas_mapel" => $this->mymodel->tam_data('mengajar,mapel,kelas',"WHERE siswa_kelas.id_kelas = kelas.id_kelas 
									AND siswa_kelas.id_siswa = siswa.id_siswa AND siswa_kelas.id_kelas = $id_kelas"),*/
				$dak = $this->mymodel->tam_data('mapel',"where id_mapel = $id_mapel");
				$data = array(
					"nama_mapel"  => $dak[0]['nama_mapel'],
					"kelas_mapel" => $this->mymodel->tam_data('kelas,mengajar',"WHERE kelas.id_kelas = mengajar.id_kelas and mengajar.id_mapel = $id_mapel"),
					"akses"		  => $session['akses']
				);
				$dota = array('id_mapel' => $id_mapel);

				//$dat = array('datanya' => $id_kelas);

				$aksesnya = array(
					"akses"		=> $session['akses'],
					"id_mapel"	=> $id_mapel
				);
				if ($session['akses'] == "Administrator"){
					$isi = array(
							"menu"		=> $this->load->view('menu.php',$aksesnya,true),
							"header" 	=> $this->load->view('header.php',$namanya,true),
							"tombol"	=> $this->load->view('mapel_guru/tombol.php',$dota,true),
							"update"	=> "",
							"tabel" 	=> $this->load->view('mapel_guru/kelas_mapel_tabel.php',$data,true)
						);
				}else{
					$isi = array(
							"menu"		=> $this->load->view('menu.php',$aksesnya,true),
							"header" 	=> $this->load->view('header.php',$namanya,true),
							"tombol"	=> "",
							"update"	=> "",
							"tabel" 	=> $this->load->view('mapel_guru/kelas_mapel_tabel.php',$data,true)
						);
				}
				$this->load->view('mapel_guru/form_kelas_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_kelas_mapel($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			/*$data = array(
				"kelas_mapel" =>$this->mymodel->tam_data('siswa_kelas,siswa,kelas',"WHERE siswa_kelas.id_kelas = kelas.id_kelas 
								AND siswa_kelas.id_siswa = siswa.id_siswa AND siswa_kelas.id_kelas = $id_kelas")
			);
			*/

			$dota = array(
				"semua_kelas" => $this->mymodel->tam_data('kelas'),
				"id_mapel"	  => $id_mapel	
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('mapel_guru/daftar_kelas_mapel.php',$dota,true),
				"tabel" => "",
			);
			$this->load->view('mapel_guru/form_kelas_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_kelas_mapel($id_diajarkan){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$gok = $this->mymodel->tam_data('mengajar',"WHERE id_diajarkan = $id_diajarkan");

			$data1 = array(
				"semua_kelas" 	  => $this->mymodel->tam_data('kelas'),
				"id_kelas"		  => $gok[0]['id_kelas'],
				"id_diajarkan"	  => $id_diajarkan
			);
			
			$data = array();
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('Mapel_guru/kelas_mapel_update.php',$data1,true),
				"tabel"		=> ""
				//"tabel" 	=> $this->load->view('kelas_siswa/kelas_siswa_tabel.php',$data1,true)
			);
			$this->load->view('Mapel_guru/form_kelas_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	//---------Tugas-------------
	public function form_tugas(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"tugas" 	=> $this->mymodel->tam_data('mapel,guru','where mapel.id_guru = guru.id_guru'),
			);

			

			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> "",
				"update"=> "",
				"tabel" => $this->load->view('tugas/tugas_tabel.php',$data,true)
			);
			$this->load->view('tugas/form_tugas.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	//------------File tugas

	public function list_tugas($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$banyak = $this->mymodel->tam_data_gabung("count(id_mapel) as kucing ","tugas","where id_mapel = $id_mapel");
			
			$data = array(
				"list_tugas" =>$this->mymodel->tam_data('tugas,mapel,guru',"where tugas.id_mapel = mapel.id_mapel and mapel.id_guru = guru.id_guru
													and tugas.id_mapel = $id_mapel"),
				"hitung"	=> $banyak[0]['kucing']
			);

			$dota = array(
				'id_mapel' => $id_mapel
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> $this->load->view('tugas/tombol',$dota,true),
				"update"=> "",
				"tabel" => $this->load->view('tugas/list_tabel.php',$data,true)
			);
			$this->load->view('tugas/form_tugas.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_tugas($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$dota = array(
				'id_mapel' => $id_mapel
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('tugas/daftar_tugas.php',$dota,true),
				"tabel" => ""
			);
			$this->load->view('tugas/form_tugas.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_tugas($id_tugas){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$go = $this->mymodel->tam_data('tugas',"WHERE id_tugas = $id_tugas");
			/*$data1 = array(
				"mapel" =>$this->mymodel->tam_data('mapel')
			);
			*/
			$data = array(
				"id_tugas"		=> $id_tugas,
				"judul_tugas"	=> $go[0]['judul_tugas'],
				"id_mapel"		=> $go[0]['id_mapel']
			);


			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('tugas/update_tugas.php',$data,true),
				"tabel" 	=> "",
			);
			$this->load->view('tugas/form_tugas.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	//---------Materi-------------
	public function form_materi(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"materi" 	=> $this->mymodel->tam_data('mapel,guru','where mapel.id_guru = guru.id_guru'),
			);

			

			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> "",
				"update"=> "",
				"tabel" => $this->load->view('materi/materi_tabel.php',$data,true)
			);
			$this->load->view('materi/form_materi.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	//------------File materi-----------

	public function list_materi($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$banyak = $this->mymodel->tam_data_gabung("count(id_mapel) as kucing ","materi","where id_mapel = $id_mapel");
			
			$data = array(
				"list_materi" =>$this->mymodel->tam_data('materi,mapel,guru',"where materi.id_mapel = mapel.id_mapel and mapel.id_guru = guru.id_guru
													and materi.id_mapel = $id_mapel"),
				"hitung"	=> $banyak[0]['kucing']
			);

			$dota = array(
				'id_mapel' => $id_mapel
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> $this->load->view('materi/tombol',$dota,true),
				"update"=> "",
				"tabel" => $this->load->view('materi/list_tabel.php',$data,true)
			);
			$this->load->view('materi/form_materi.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_materi($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$dota = array(
				'id_mapel' => $id_mapel
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('materi/daftar_materi.php',$dota,true),
				"tabel" => ""
			);
			$this->load->view('materi/form_materi.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_materi($id_materi){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$go = $this->mymodel->tam_data('materi',"WHERE id_materi = $id_materi");
			/*$data1 = array(
				"mapel" =>$this->mymodel->tam_data('mapel')
			);
			*/
			$data = array(
				"id_materi"		=> $id_materi,
				"judul_materi"	=> $go[0]['judul_materi'],
				"id_mapel"		=> $go[0]['id_mapel']
			);


			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('materi/update_materi.php',$data,true),
				"tabel" 	=> "",
			);
			$this->load->view('materi/form_materi.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}


	//---------Quis-------------
	public function form_quis(){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"quis" 	=> $this->mymodel->tam_data('mapel,guru','where mapel.id_guru = guru.id_guru'),
			);

			
$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> "",
				"update"=> "",
				"tabel" => $this->load->view('quis/quis_tabel.php',$data,true)
			);
			$this->load->view('quis/form_quis.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	//------------List Quis-----------

	public function list_quis($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$banyak = $this->mymodel->tam_data_gabung("count(id_mapel) as kucing ","quis","where id_mapel = $id_mapel");
			
			$data = array(
				"list_quis" =>$this->mymodel->tam_data('quis,mapel,guru',"where quis.id_mapel = mapel.id_mapel and mapel.id_guru = guru.id_guru
													and quis.id_mapel = $id_mapel"),
				"hitung"	=> $banyak[0]['kucing']
			);

			$dota = array(
				'id_mapel' => $id_mapel
			);
			$aksesnya = array(
				"akses"	=> $session['akses'],
				"id_mapel" => $id_mapel,
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> $this->load->view('quis/tombol',$dota,true),
				"update"=> "",
				"tabel" => $this->load->view('quis/list_tabel.php',$data,true)
			);
			$this->load->view('quis/form_quis.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_quis($id_mapel){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$dota = array(
				'id_mapel' => $id_mapel
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('quis/daftar_quis.php',$dota,true),
				"tabel" => ""
			);
			$this->load->view('quis/form_quis.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_quis($id_quis){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$go = $this->mymodel->tam_data('quis',"WHERE id_quis = $id_quis");
			/*$data1 = array(
				"mapel" =>$this->mymodel->tam_data('mapel')
			);
			*/
			$data = array(
				"id_quis"		=> $id_quis,
				"judul_quis"	=> $go[0]['judul_quis'],
				"id_mapel"		=> $go[0]['id_mapel']
			);


			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->menu(),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('quis/update_quis.php',$data,true),
				"tabel" 	=> "",
			);
			$this->load->view('quis/form_quis.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	//---------Soal Quis-------------
	public function daftar_soal_quis($id_quis){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

			$data = array(
				"soal" 		=> $this->mymodel->tam_data('soal_quis',"where id_quis = $id_quis"),
				"id_quis"	=> $id_quis
			);

			$dota = array(
				"id_quis"	=> $id_quis
			);


			$isi = array(
				"menu"		=> $this->menu(),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"=> $this->load->view('quis/tombol_soal.php',$dota,true),
				"update"=> "",
				"tabel" => $this->load->view('quis/soal_tabel.php',$data,true)
			);
			$this->load->view('quis/form_quis.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function tambah_soal_quis($id_quis){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);		

			$dota = array(
				'id_quis' => $id_quis
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->menu(),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('quis/daftar_soal.php',$dota,true),
				"tabel" => ""
			);
			$this->load->view('quis/form_quis.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function update_soal_quis($id_quis,$id_soal){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			$go = $this->mymodel->tam_data('soal_quis',"WHERE id_soal = $id_soal");
			/*$data1 = array(
				"mapel" =>$this->mymodel->tam_data('mapel')
			);
			*/
			$data = array(
				"id_quis"		=> $id_quis,
				"id_soal"		=> $id_soal,
				"soal"		    => $go[0]['soal'],
				"a"				=> $go[0]['a'],
				"b"				=> $go[0]['b'],
				"c"				=> $go[0]['c'],
				"d"				=> $go[0]['d'],
				"kunci"			=> $go[0]['kunci']
			);


			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->menu(),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol"	=> "",
				"update" 	=> $this->load->view('quis/update_soal.php',$data,true),
				"tabel" 	=> "",
			);
			$this->load->view('quis/form_quis.php',$isi);
		}else
		{
			redirect('login','refresh');
		}

	}

	// ------------------------Nilai---------------------------
	public function kelas_tugas($id_mapel,$id_tugas){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);

				/*"kelas_mapel" => $this->mymodel->tam_data('mengajar,mapel,kelas',"WHERE siswa_kelas.id_kelas = kelas.id_kelas 
									AND siswa_kelas.id_siswa = siswa.id_siswa AND siswa_kelas.id_kelas = $id_kelas"),*/
				$dak = $this->mymodel->tam_data('mapel',"where id_mapel = $id_mapel");
				$data = array(
					"nama_mapel"  => $dak[0]['nama_mapel'],
					"kelas_mapel" => $this->mymodel->tam_data('kelas,mengajar',"WHERE kelas.id_kelas = mengajar.id_kelas and mengajar.id_mapel = $id_mapel"),
					"akses"		  => $session['akses'],
					"id_tugas" 	  => $id_tugas
				);
				$dota = array(
					'id_mapel' => $id_mapel,
					
				);

				//$dat = array('datanya' => $id_kelas);

				$aksesnya = array(
					"akses"		=> $session['akses'],
					"id_mapel"	=> $id_mapel
				);
				if ($session['akses'] == "Administrator"){
					$isi = array(
							"menu"		=> $this->load->view('menu.php',$aksesnya,true),
							"header" 	=> $this->load->view('header.php',$namanya,true),
							"tombol"	=> "",
							"update"	=> "",
							"tabel" 	=> $this->load->view('tugas/kelas_mapel_tabel.php',$data,true)
						);
				}else{
					$isi = array(
							"menu"		=> $this->load->view('menu.php',$aksesnya,true),
							"header" 	=> $this->load->view('header.php',$namanya,true),
							"tombol"	=> "",
							"update"	=> "",
							"tabel" 	=> $this->load->view('tugas/kelas_mapel_tabel.php',$data,true)
						);
				}
				$this->load->view('mapel_guru/form_kelas_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}

	public function nilai_siswa($id_kelas,$id_tugas){
		error_reporting(0);
		if ($this->session->userdata('logged_in') == TRUE)
			{
				$session = $this->session->userdata('logged_in');
				$namanya = array(
					"username"	=> $session['username']
				);	

				$meong = $this->mymodel->tam_data('kelas',"WHERE kelas.id_kelas = $id_kelas");
				$kucing = $this->mymodel->tam_data("siswa,tugas_nilai","where tugas_nilai.id_tugas = $id_tugas and tugas_nilai.id_siswa = siswa.id_siswa
																	and tugas_nilai.id_kelas = $id_kelas");
				$data = array(
					"kelas_siswa" => $this->mymodel->tam_data("siswa,tugas_nilai",
															  "where tugas_nilai.id_tugas = $id_tugas and tugas_nilai.id_siswa = siswa.id_siswa
															  and tugas_nilai.id_kelas = $id_kelas"),
					"kd_kelas"	  => $meong[0]['kd_kelas'],
					"akses"		  => $session['akses'],
					'id_kelas' => $id_kelas,
					'id_tugas' => $id_tugas
					
				);
				$dat = array(
					'id_kelas' => $id_kelas,
					'id_tugas' => $id_tugas
				);
				$aksesnya = array(
					"akses"	=> $session['akses']
				);
				if ($session['akses'] == "Administrator"){
					if ($kucing[0]['id_tugas'] == ""){
						$isi = array(
							"menu"		=> $this->menu(),
							"header" 	=> $this->load->view('header.php',$namanya,true),
							"tombol"	=> $this->load->view('tugas/tombol_nilai.php',$dat,true),
							"update"	=> "",
							"tabel" 	=> $this->load->view('tugas/kelas_siswa_tabel.php',$data,true)
						);
					}else{
						$isi = array(
							"menu"		=> $this->menu(),
							"header" 	=> $this->load->view('header.php',$namanya,true),
							"tombol"	=> "",
							"update"	=> "",
							"tabel" 	=> $this->load->view('tugas/kelas_siswa_tabel.php',$data,true)
						);
					}
				}else{
					$isi = array(
						"menu"		=> $this->menu(),
						"header" 	=> $this->load->view('header.php',$namanya,true),
						"tombol"	=> $this->load->view('tugas/tombol_nilai.php',$dat,true),
						"update"	=> "",
						"tabel" 	=> $this->load->view('tugas/kelas_siswa_tabel.php',$data,true)
					);
				}
				$this->load->view('kelas_siswa/form_kelas_siswa.php',$isi);
			}else
			{
				redirect('login','refresh');
			}
	}

	public function tambah_nilai_tugas($id_kelas,$id_tugas){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			/*$data = array(
				"kelas_mapel" =>$this->mymodel->tam_data('siswa_kelas,siswa,kelas',"WHERE siswa_kelas.id_kelas = kelas.id_kelas 
								AND siswa_kelas.id_siswa = siswa.id_siswa AND siswa_kelas.id_kelas = $id_kelas")
			);
			*/

			$dota = array(
				"semua_siswa" => $this->mymodel->tam_data('siswa,siswa_kelas',"WHERE siswa_kelas.id_kelas = $id_kelas and siswa_kelas.id_siswa = siswa.id_siswa"),
				"id_tugas"	  => $id_tugas,
				"id_kelas"	  => $id_kelas,
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('tugas/input_nilai.php',$dota,true),
				"tabel" => "",
			);
			$this->load->view('mapel_guru/form_kelas_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}


	public function ubah_nilai_tugas($id_kelas,$id_tugas,$id_tugas_nilai){
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$session = $this->session->userdata('logged_in');
			$namanya = array(
				"username"	=> $session['username']
			);	

			/*$data = array(
				"kelas_mapel" =>$this->mymodel->tam_data('siswa_kelas,siswa,kelas',"WHERE siswa_kelas.id_kelas = kelas.id_kelas 
								AND siswa_kelas.id_siswa = siswa.id_siswa AND siswa_kelas.id_kelas = $id_kelas")
			);
			*/
			$meong = $this->mymodel->tam_data('tugas_nilai',"WHERE tugas_nilai.id_tugas_nilai = $id_tugas_nilai");

			$dota = array(
				"id_tugas_nilai"	  => $id_tugas_nilai,
				"nilai"				  => $meong[0]['nilai'],
				"id_kelas"			  => $id_kelas,
				"id_tugas"			  => $id_tugas
			);
			$aksesnya = array(
				"akses"	=> $session['akses']
			);

			$isi = array(
				"menu"		=> $this->load->view('menu.php',$aksesnya,true),
				"header" 	=> $this->load->view('header.php',$namanya,true),
				"tombol" => "",
				"update"=> $this->load->view('tugas/update_nilai.php',$dota,true),
				"tabel" => "",
			);
			$this->load->view('mapel_guru/form_kelas_mapel.php',$isi);
		}else
		{
			redirect('login','refresh');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */