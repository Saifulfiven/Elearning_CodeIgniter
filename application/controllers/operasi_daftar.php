<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operasi_daftar extends CI_Controller{
	
	//------------------Guru-------------------

	public function insert_guru(){
		$nama 	= $_POST['nama_lengkap'];
		$nip	= $_POST['nip'];
		$jk		= $_POST['jk_guru'];
		$lahir	= $_POST['tgl_lahir'];
		$alamat	= $_POST['alamat'];
		$hak_akses = $_POST['akses'];
		//$pecah  = explode('/',$lahir);
		//$apa 	= $pecah[2]."-".$pecah[0]."-".$pecah[1];
		//$gabung = $apa;

		$data_insert = array(
			'nip'		=> $nip,
			'nama'		=> $nama,
			'alamat'	=> $alamat,
			'jk_guru'	=> $jk,
			'tgl_lahir'	=> $lahir,
			'akses'		=> $hak_akses
		);
		
		$sukses = $this->db->insert('guru',$data_insert);

		if ($sukses > 0){
			$this->session->set_flashdata('pesan','Sukses input data guru');
			redirect('Home/form_guru');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal diinput');
			redirect('Home/form_guru');
		}
	
	}

	public function hapus_guru($id_guru){
		$data = array('id_guru' => $id_guru);
		$sukses = $this->db->delete('guru',$data);

		if ($sukses >0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Guru');
			redirect('Home/form_guru');
		}else{
			$this->session->set_flashdata('pesan','Terdapat Kesalah saat penghapusan Data Guru');
			redirect('Home/form_guru');
		}
	}

	public function do_update_guru()
	{
		$id_guru	= $_POST['id_guru'];
		$nip		= $_POST['nip'];
		$nama 		= $_POST['nama_lengkap'];
		$alamat   	= $_POST['alamat'];
		
		$tgl_lahir  = $_POST['tgl_lahir'];
		
		//$tglx		= $_POST['tgl_lahirx'];

		$jk 	    = $_POST['jk_guru'];
		$hak_akses	= $_POST['akses'];

		//$satu 		= str_replace("/","-",$tgl_lahir);
		/*$pecah		= explode('/',$satu);
		$apa		= $pecah[2]."-".$pecah[0]."-".$pecah[1];
		$gabung		= $apa;
		*/
		
		if ($tglx == $tgl_lahir){
			$data_update = array(
				'nama'		=> $nama,
				'alamat'	=> $alamat,
				'tgl_lahir'	=> $tglx,
				'jk_guru'	=> $jk,
				'nip'		=> $nip,
				'akses'		=> $hak_akses
			);	
		}else{
			$data_update = array(
				'nama'		=> $nama,
				'alamat'	=> $alamat,
				'tgl_lahir'	=> $tgl_lahir,
				'jk_guru'	=> $jk,
				'nip'		=> $nip,
				'akses'		=> $hak_akses
			);
		}
		
		//$feli = "WHERE id_guru = $id_guru";
		
		$where = array('id_guru' => $id_guru);
		$res = $this->db->Update('guru',$data_update,$where);

		if ($res >= 1){
			$this->session->set_flashdata('pesan','Data Sukses diupdate...!!!');
			redirect('Home/form_guru');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal diupdate...!!!');
			redirect('Home/form_guru');
		}
	}

	//------------------------Siswa------------------------

	public function insert_siswa(){
		$nama 	= $_POST['nama_siswa'];
		$nis	= $_POST['nis'];
		$jk		= $_POST['jk'];
		$telp	= $_POST['telp'];
		$alamat	= $_POST['alamat'];
		

		$data_insert = array(
			'nis'		=> $nis,
			'nama_siswa'=> $nama,
			'alamat'	=> $alamat,
			'jk'	    => $jk,
			'telp'		=> $telp,
		);
		
		$sukses = $this->db->insert('siswa',$data_insert);

		if ($sukses > 0){
			$this->session->set_flashdata('pesan','Sukses input data siswa');
			redirect('Home/form_siswa');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal diinput');
			redirect('Home/form_siswa');
		}
	
	}

	public function hapus_siswa($id_siswa){
		$data = array('id_siswa' => $id_siswa);
		$sukses = $this->db->delete('siswa',$data);

		if ($sukses >0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Siswa');
			redirect('Home/form_siswa');
		}else{
			$this->session->set_flashdata('pesan','Terdapat Kesalah saat penghapusan Data Siswa');
			redirect('Home/form_siswa');
		}
	}

	public function do_update_siswa()
	{
		$id_siswa	= $_POST['id_siswa'];
		$nis		= $_POST['nis'];
		$nama 		= $_POST['nama_siswa'];
		$alamat   	= $_POST['alamat'];
		$jk 	    = $_POST['jk'];
		$telp		= $_POST['telp'];
					
			$data_update = array(
				'nama_siswa'=> $nama,
				'alamat'	=> $alamat,
				'jk'		=> $jk,
				'nis'		=> $nis,
				'telp'		=> $telp,
			);
		
		//$feli = "WHERE id_siswa = $id_siswa";
		
		$where = array('id_siswa' => $id_siswa);
		$res = $this->db->Update('siswa',$data_update,$where);

		if ($res >= 1){
			$this->session->set_flashdata('pesan','Data Sukses diupdate...!!!');
			redirect('Home/form_siswa');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal diupdate...!!!');
			redirect('Home/form_siswa');
		}
	}

	//------------------------Kelas------------------------

	public function insert_kelas(){
		$kd_kelas 	= $_POST['kd_kelas'];

		$data_insert = array(
			'kd_kelas'		=> $kd_kelas,
		);
		
		$sukses = $this->db->insert('kelas',$data_insert);

		if ($sukses > 0){
			$this->session->set_flashdata('pesan','Sukses input data Kelas');
			redirect('Home/form_kelas');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal diinput');
			redirect('Home/form_kelas');
		}
	
	}

	public function hapus_kelas($id_kelas){
		$data = array('id_kelas' => $id_kelas);
		$sukses = $this->db->delete('kelas',$data);

		if ($sukses >0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Kelas');
			redirect('Home/form_kelas');
		}else{
			$this->session->set_flashdata('pesan','Terdapat Kesalah saat penghapusan Data Kelas');
			redirect('Home/form_kelas');
		}
	}

	public function do_update_kelas()
	{
		$id_kelas	= $_POST['id_kelas'];
		$kd_kelas	= $_POST['kd_kelas'];
			
			$data_update = array(
				'kd_kelas'=> $kd_kelas,
			);
		
		//$feli = "WHERE id_siswa = $id_siswa";
		
		$where = array('id_kelas' => $id_kelas);
		$res = $this->db->Update('kelas',$data_update,$where);

		if ($res >= 1){
			$this->session->set_flashdata('pesan','Data Sukses diupdate...!!!');
			redirect('Home/form_kelas');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal diupdate...!!!');
			redirect('Home/form_kelas');
		}
	}

	//------------------------Kelas Siswa------------------------

	public function insert_kelas_siswa(){
		$id_kelas 	= $_POST['id_kelas'];
		$id_siswa	= $_POST['id_siswa'];

		$query = $this->mymodel->tam_data('siswa_kelas',"where siswa_kelas.id_siswa = $id_siswa");
		if ($query == true){
			
			$this->session->set_flashdata('pesan','Data Gagal disimpan, Siswa ini telah memiliki kelas');;
			redirect('home/tambah_kelas_siswa/'.$id_kelas);			
		}else{
			$data_insert = array(
				'id_siswa'		=> $id_siswa,
				'id_kelas'		=> $id_kelas,
			);
		
			$sukses = $this->db->insert('siswa_kelas',$data_insert);

			if ($sukses > 0){
				$this->session->set_flashdata('pesan','Sukses input Data Siswa di Kelas ini');
				redirect('Home/daftar_kelas_siswa/'.$id_kelas);
			}else{
				$this->session->set_flashdata('pesan','Data Gagal diinput');
				redirect('Home/daftar_kelas_siswa');
			}
		}	
	}

	public function hapus_kelas_siswa($id_daftar){
		$data = array('id_daftar_siswa' => $id_daftar);
		$sukses = $this->db->delete('siswa_kelas',$data);

		if ($sukses >0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Siswa di kelas');
			redirect('Home/form_kelas');
		}else{
			$this->session->set_flashdata('pesan','Terdapat Kesalahan saat penghapusan Data Siswa di Kelas');
			redirect('Home/form_kelas');
		}
	}

	public function do_update_kelas_siswa()
	{
		$id_daftar_siswa	= $_POST['id_daftar_siswa'];
		$id_kelas			= $_POST['id_kelas'];
			
			$data_update = array(
				'id_kelas'=> $id_kelas,
			);
		
		//$feli = "WHERE id_siswa = $id_siswa";
		
		$where = array('id_daftar_siswa' => $id_daftar_siswa);
		$res = $this->db->Update('siswa_kelas',$data_update,$where);

		if ($res >= 1){
			$this->session->set_flashdata('pesan','Data Kelas Siswa Berhasil dipindahkan...!!!');
			redirect('Home/daftar_kelas_siswa/'.$id_kelas);
		}else{
			$this->session->set_flashdata('pesan',"<h3 style='color:red'>Data Kelas Siswa Gagal dipindahkan..!!!");
			redirect('Home/daftar_kelas_siswa/'.$id_kelas);
		}
	}

	//------------------------Matapelajaran------------------------

	public function insert_mapel(){
		$id_guru 	= $_POST['id_guru'];
		$nama_mapel = $_POST['nama_mapel'];


		$data_insert = array(
			'id_guru'		=> $id_guru,
			'nama_mapel'	=> $nama_mapel
		);
		
		$query = $this->mymodel->tam_data('mapel',"where id_guru = $id_guru");

		if ($query == true){
			$this->session->set_flashdata('pesan',"<h3 style='color:red'>Data Gagal disimpan, Guru ini telah memiliki Matapelajaran</h3>");
			redirect('home/tambah_mapel');
		}
			$sukses = $this->db->insert('mapel',$data_insert);
		
			$this->session->set_flashdata('pesan','Sukses input Matapelajaran');
			redirect('Home/form_mapel');
		
	
	}

	public function hapus_mapel($id_kelas){
		$data = array('id_kelas' => $id_kelas);
		$sukses = $this->db->delete('kelas',$data);

		if ($sukses >0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Kelas');
			redirect('Home/form_kelas');
		}else{
			$this->session->set_flashdata('pesan','Terdapat Kesalah saat penghapusan Data Kelas');
			redirect('Home/form_kelas');
		}
	}

	public function do_update_mapel()
	{
		$id_mapel	= $_POST['id_mapel'];
		$nama_mapel	= $_POST['nama_mapel'];
		$id_guru 	= $_POST['id_guru'];
			
			$data_update = array(
				'nama_mapel'	=> $nama_mapel,
				'id_guru'		=> $id_guru
			);
		
		//$feli = "WHERE id_siswa = $id_siswa";
		
		$where = array('id_mapel' => $id_mapel);
		$res = $this->db->Update('mapel',$data_update,$where);

		if ($res > 0){
			$this->session->set_flashdata('pesan','Data Sukses diupdate...!!!');
			redirect('Home/form_mapel');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal diupdate...!!!');
			redirect('Home/form_mapel');
		}
	}

	//------------------------Kelas------------------------

	public function insert_kelas_mapel(){
		$id_mapel 	= $_POST['id_mapel'];
		$id_kelas = $_POST['id_kelas'];


		$query = $this->mymodel->tam_data('mengajar',"where id_kelas = $id_kelas and id_mapel = $id_mapel");
		if ($query == true){
			$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal, Data ini Telah Ada Sebelumnya.</h3>");
		redirect('Home/tambah_kelas_mapel/'.$id_mapel);	
		}else{
			$data_insert = array(
				'id_mapel'		=> $id_mapel,
				'id_kelas'		=> $id_kelas
			);
			
			$sukses = $this->db->insert('mengajar',$data_insert);
			
			$this->session->set_flashdata('pesan','Sukses input Matapelajaran');
			redirect('Home/daftar_kelas_mapel/'.$id_mapel);
		}
		

		/*
			$this->session->set_flashdata('pesan',"<h3 style='color:red'>Data Gagal disimpan, Guru ini telah memiliki Matapelajaran</h3>");
			redirect('home/tambah_mapel');
		}*/
			
		
	
	}

	public function hapus_kelas_mapel($id_diajarkan){
		$data = array('id_diajarkan' => $id_diajarkan);
		$sukses = $this->db->delete('mengajar',$data);

		if ($sukses >0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Kelas Matapelajaran');
			redirect('Home/form_mapel');
		}else{
			$this->session->set_flashdata('pesan','Terdapat Kesalahan saat penghapusan Data Kelas');
			redirect('Home/form_mapel');
		}
	}

	public function do_update_kelas_mapel()
	{
		$id_diajarkan	= $_POST['id_diajarkan'];
		$id_kelas		= $_POST['id_kelas'];
			
			$data_update = array(
				'id_kelas'	=> $id_kelas,
				
			);
		
		//$feli = "WHERE id_siswa = $id_siswa";
		
		$where = array('id_diajarkan' => $id_diajarkan);
		$res = $this->db->Update('mengajar',$data_update,$where);

		if ($res > 0){
			$this->session->set_flashdata('pesan','Data Sukses diupdate...!!!');
			redirect('Home/daftar_kelas_mapel/'.$id_diajarkan);
		}else{
			$this->session->set_flashdata('pesan',"<h3 style='color:red'>Data Gagal diupdate...!!!</h3>");
			redirect('Home/update_kelas_mapel/'.$id_diajarkan);
		}
	}

	//-----------------Tugas----------------------
	public function insert_tugas(){
		$id_mapel 	= $_POST['id_mapel'];
		$judul_tugas = $_POST['judul_tugas'];

		$tempat 	= $_FILES['nama_file']['tmp_name'];
		$filenya 	= $_FILES['nama_file']['name'];

			$acak = rand(1,100);
			$gabung = $acak."_".$filenya;
			$direktori = "asset/file/tugas/$gabung";
			
			$data_insert = array(
				'id_mapel'		=> $id_mapel,
				'judul_tugas'	=> $judul_tugas,
				'nama_file'		=> $gabung
			);
			
			$sukses = $this->db->insert('tugas',$data_insert);
			if ($sukses == true){
				$upload = move_uploaded_file($tempat, $direktori); 
				$this->session->set_flashdata('pesan','Sukses input tugas');
				redirect('Home/list_tugas/'.$id_mapel);	
			}else{
				$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal, Data ini Telah Ada Sebelumnya.</h3>");
				redirect('Home/tambah_tugas/'.$id_mapel);
			}
	}

	public function update_tugas(){
		$id_tugas	= $_POST['id_tugas'];
		$id_mapel 	= $_POST['id_mapel'];
		$judul_tugas = $_POST['judul_tugas'];

		$tempat 	= $_FILES['nama_file']['tmp_name'];
		$filenya 	= $_FILES['nama_file']['name'];

			$acak = rand(1,100);
			$gabung = $acak."_".$filenya;
			
			if ($filenya == ""){
				$data_update = array(
				'id_mapel'		=> $id_mapel,
				'judul_tugas'	=> $judul_tugas
			);
			}else{
				$cek = $this->mymodel->tam_data('tugas',"where id_tugas = $id_tugas");
				unlink('asset/file/tugas/'.$cek[0]['nama_file']);

				
				$data_update = array(
					'id_mapel'		=> $id_mapel,
					'judul_tugas'	=> $judul_tugas,
					'nama_file'		=> $gabung
				);
				$direktori = "asset/file/tugas/$gabung";
				move_uploaded_file($tempat, $direktori);
			}

			$sukses = $this->db->update('tugas',$data_update,"id_tugas = $id_tugas");
			if ($sukses == true){
				$this->session->set_flashdata('pesan','Sukses Update tugas');
				redirect('Home/list_tugas/'.$id_mapel);	
			}else{
				$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal Ubah Data</h3>");
				redirect('Home/tambah_tugas/'.$id_mapel);
			}
	}
	
	public function hapus_tugas($id_mapel,$id_tugas){
		$data = array('id_tugas' => $id_tugas);
		
		$cek = $this->mymodel->tam_data('tugas',"where id_tugas = $id_tugas");
		unlink('asset/file/tugas/'.$cek[0]['nama_file']);

		$sukses = $this->db->delete('tugas',$data);
		
		if ($sukses > 0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Tugas');
			redirect('Home/list_tugas/'.$id_mapel);
		}else{
			$this->session->set_flashdata('pesan',"<h3 style='red'>Terdapat Kesalahan saat penghapusan Data Tugas</h3>");
			redirect('Home/list_tugas/'.$id_mapel);
		}
		
	}

	//-----------------Materi----------------------
	public function insert_materi(){
		$id_mapel 	= $_POST['id_mapel'];
		$judul_materi = $_POST['judul_materi'];

		$tempat 	= $_FILES['nama_file']['tmp_name'];
		$filenya 	= $_FILES['nama_file']['name'];

			$acak = rand(1,100);
			$gabung = $acak."_".$filenya;
			$direktori = "asset/file/materi/$gabung";
			
			$data_insert = array(
				'id_mapel'		=> $id_mapel,
				'judul_materi'	=> $judul_materi,
				'nama_file'		=> $gabung
			);
			
			$sukses = $this->db->insert('materi',$data_insert);
			if ($sukses == true){
				$upload = move_uploaded_file($tempat, $direktori); 
				$this->session->set_flashdata('pesan','Sukses input materi');
				redirect('Home/list_materi/'.$id_mapel);	
			}else{
				$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal Disimpan</h3>");
				redirect('Home/tambah_materi/'.$id_mapel);
			}
	}

	public function update_materi(){
		$id_materi	= $_POST['id_materi'];
		$id_mapel 	= $_POST['id_mapel'];
		$judul_materi = $_POST['judul_materi'];

		$tempat 	= $_FILES['nama_file']['tmp_name'];
		$filenya 	= $_FILES['nama_file']['name'];

			$acak = rand(1,100);
			$gabung = $acak."_".$filenya;
			
			if ($filenya == ""){
				$data_update = array(
				'id_mapel'		=> $id_mapel,
				'judul_materi'	=> $judul_materi
			);
			}else{
				$cek = $this->mymodel->tam_data('materi',"where id_materi = $id_materi");
				unlink('asset/file/materi/'.$cek[0]['nama_file']);

				
				$data_update = array(
					'id_mapel'		=> $id_mapel,
					'judul_materi'	=> $judul_materi,
					'nama_file'		=> $gabung
				);
				$direktori = "asset/file/materi/$gabung";
				move_uploaded_file($tempat, $direktori);
			}

			$sukses = $this->db->update('materi',$data_update,"id_materi = $id_materi");
			if ($sukses == true){
				$this->session->set_flashdata('pesan','Sukses Update Materi');
				redirect('Home/list_materi/'.$id_mapel);	
			}else{
				$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal Ubah Data</h3>");
				redirect('Home/tambah_materi/'.$id_mapel);
			}
	}
	
	public function hapus_materi($id_mapel,$id_materi){
		$data = array('id_materi' => $id_materi);
		$cek = $this->mymodel->tam_data('materi',"where id_materi = $id_materi");
				unlink('asset/file/materi/'.$cek[0]['nama_file']);

		$sukses = $this->db->delete('materi',$data);

		if ($sukses > 0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Materi');
			redirect('Home/list_materi/'.$id_mapel);
		}else{
			$this->session->set_flashdata('pesan',"<h3 style='red'>Terdapat Kesalahan saat penghapusan Data Materi</h3>");
			redirect('Home/list_materi/'.$id_mapel);
		}
	}

	//-----------------Quis----------------------
	public function insert_quis_banyak(){
		$id_mapel 	= $_POST['id_mapel'];
		$judul_quis = $_POST['judul_quis'];
		$soal		= $_POST['soal'];
		$a 			= $_POST['a'];
		$b 			= $_POST['b'];
		$c 			= $_POST['c'];
		$d 			= $_POST['d'];
		$kunci		= $_POST['kunci'];

		$jumlah = count($soal);
			
			$data_insert = array(
				'id_mapel'		=> $id_mapel,
				'judul_quis'	=> $judul_quis,
			);
			
			$sukses = $this->db->insert('quis',$data_insert);

			$id_quis = $this->mymodel->tam_data('quis',"where id_mapel = $id_mapel order by id_quis DESC limit 1");

			for($z = 0; $z < $jumlah; $z++){
				$data_banyak = array(
				'id_quis'		=> $id_quis[0]['id_quis'],
				'soal'			=> $soal[$z],
				'a'				=> $a[$z],
				'b'				=> $b[$z],
				'c'				=> $c[$z],
				'd'				=> $d[$z],
				'kunci'			=> $kunci[$z]
				);
				$this->db->insert('soal_quis',$data_banyak);
			}

			//if ($sukses == true){
				$this->session->set_flashdata('pesan','Sukses input Quis');
				redirect('Home/list_quis/'.$id_mapel);	
			//}else{
			//	$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal Disimpan</h3>");
			//	redirect('Home/tambah_quis/'.$id_mapel);
			//}
	}

	public function update_quis(){
		$id_quis	= $_POST['id_quis'];
		$id_mapel 	= $_POST['id_mapel'];
		$judul_quis = $_POST['judul_quis'];

				$data_update = array(
					'id_mapel'		=> $id_mapel,
					'judul_quis'	=> $judul_quis
				);

			$sukses = $this->db->update('quis',$data_update,"id_quis = $id_quis");
			if ($sukses == true){
				$this->session->set_flashdata('pesan','Sukses Update Quis');
				redirect('Home/list_quis/'.$id_mapel);	
			}else{
				$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal Ubah Data</h3>");
				redirect('Home/tambah_quis/'.$id_mapel);
			}
	}
	
	public function hapus_quis($id_quis,$kucing){
		$data = array('id_quis' => $id_quis);
		//$cek = $this->mymodel->tam_data('quis',$data);

		$soalnya = $this->db->delete('soal_quis',$data);
		$sukses = $this->db->delete('quis',$data);


		if ($sukses > 0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Quis');
			redirect('Home/list_quis/'.$kucing);
		}else{
			$this->session->set_flashdata('pesan',"<h3 style='red'>Terdapat Kesalahan saat penghapusan Data Quis</h3>");
			redirect('Home/list_quis/'.$kucing);
		}
	}

	//-----------------Tambah Soal Quis----------------------
	public function insert_quis_soal(){
		$id_quis 	= $_POST['id_quis'];
		$soal		= $_POST['soal'];
		$a 			= $_POST['a'];
		$b 			= $_POST['b'];
		$c 			= $_POST['c'];
		$d 			= $_POST['d'];
		$kunci		= $_POST['kunci'];

				$data = array(
				'id_quis'		=> $id_quis,
				'soal'			=> $soal,
				'a'				=> $a,
				'b'				=> $b,
				'c'				=> $c,
				'd'				=> $d,
				'kunci'			=> $kunci
				);
				$this->db->insert('soal_quis',$data);
			

			//if ($sukses == true){
				$this->session->set_flashdata('pesan','Sukses Tambah Soal Quis');
				redirect('Home/daftar_soal_quis/'.$id_quis);	
			//}else{
			//	$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal Disimpan</h3>");
			//	redirect('Home/tambah_quis/'.$id_mapel);
			//}
	}

	public function update_quis_soal(){
		$id_quis	= $_POST['id_quis'];
		$id_soal 	= $_POST['id_soal'];
		$soal		= $_POST['soal'];
		$a 			= $_POST['a'];
		$b 			= $_POST['b'];
		$c 			= $_POST['c'];
		$d 			= $_POST['d'];
		$kunci		= $_POST['kunci'];

				$data = array(
				'soal'			=> $soal,
				'a'				=> $a,
				'b'				=> $b,
				'c'				=> $c,
				'd'				=> $d,
				'kunci'			=> $kunci
				);
				$where = array('id_soal' => $id_soal);

			$sukses = $this->db->update('soal_quis',$data,$where);
			if ($sukses == true){
				$this->session->set_flashdata('pesan','Sukses Update Soal Quis');
				redirect('Home/daftar_soal_quis/'.$id_quis);	
			}else{
				$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal Ubah Data</h3>");
				redirect('Home/daftar_soal_quis/'.$id_quis);	
			}
	}

	public function hapus_soal_quis($id_quis,$id_soal){
		$data = array('id_soal' => $id_soal);
		//$cek = $this->mymodel->tam_data('quis',$data);

		$soalnya = $this->db->delete('soal_quis',$data);


		if ($soalnya > 0){
			$this->session->set_flashdata('pesan','Sukses Hapus Data Quis');
			redirect('Home/daftar_soal_quis/'.$id_quis);
		}else{
			$this->session->set_flashdata('pesan',"<h3 style='red'>Terdapat Kesalahan saat penghapusan Data Quis</h3>");
			redirect('Home/daftar_soal_quis/'.$id_quis);
		}
	}

	public function insert_nilaitugas(){
		$id_tugas 	= $_POST['id_tugas'];
		$id_siswa 	= $_POST['id_siswa'];
		$id_kelas 	= $_POST['id_kelas'];
		$nilai 		= $_POST['nilai'];

		$jumlah = count($id_siswa);

			for($z = 0; $z < $jumlah; $z++){
				$data_banyak = array(
					'id_siswa'		=> $id_siswa[$z],
					'nilai'			=> $nilai[$z],
					'id_tugas'		=> $id_tugas,
					'id_kelas'		=> $id_kelas
				);
				$this->db->insert('tugas_nilai',$data_banyak);
			}

			//if ($sukses == true){
				$this->session->set_flashdata('pesan','Sukses input Nilai');
				redirect("Home/nilai_siswa/$id_kelas/$id_tugas");	
			//}else{
			//	$this->session->set_flashdata('pesan',"<h3 style='color:red'>Gagal Disimpan</h3>");
			//	redirect('Home/tambah_quis/'.$id_mapel);
			//}
	}

	public function update_nilaitugas(){
		$id_tugas_nilai = $_POST['id_tugas_nilai'];
		$id_kelas		= $_POST['id_kelas'];
		$id_tugas 		= $_POST['id_tugas'];
		$nilai 			= $_POST['nilai'];

		$where = array('id_tugas_nilai' => $id_tugas_nilai);
		$data = array(
			'nilai' => $nilai
		);
		$this->db->update('tugas_nilai',$data,$where);

		redirect("home/nilai_siswa/$id_kelas/$id_tugas");

	}
}
?>