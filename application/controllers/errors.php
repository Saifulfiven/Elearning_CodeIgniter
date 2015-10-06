<?php
if (!defined('BASEPATH')) exit ('No direct to Access Here');

class Errors extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model','',TRUE);
	}


	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','password','trim|required|xss_clean|callback_check_database');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_form');
		}else
		{
			redirect('home');
		}
	}

	public function check_database($password)
	{
		$username = $this->input->post('username');
		$akses = $this->input->post('akses');
		$result = $this->login_model->login($username,$password,$akses);

		if ($result)
		{
			foreach($result as $row){
				//$userx = $this->mymodel->tam_data('user',"where username = $row->username and password = $row->password");
				$data = array(
					'username' => $row->nama,
					'password' => $row->nip,
					'akses'	   => $row->akses
			
				);
			$this->session->set_userdata('logged_in',$data);
			}
			
			return TRUE;
		}else
		{
			$this->form_validation->set_message('check_database','Username atau Password Salah');
			return FALSE;
		}

	}
}
?>