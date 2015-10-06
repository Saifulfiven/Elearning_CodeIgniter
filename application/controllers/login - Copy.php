<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        
     }
	
	public function index()
    {
		// status user login = BENAR, pindah ke halaman absen
        if ($this->session->userdata('logged_in') == TRUE)
        {
            $sessi = $this->session->userdata('logged_in');
            $data['username'] = $sessi['username'];
			redirect('home',$data);
		}
        // status login salah, tampilkan form login
        else{
            $this->load->view('login_form.php');
        }
	}

	public function logout()
	{
		?><script>alert('Anda telah keluar dari halaman administrator'); </script>
		<?php
        $this->session->unset_userdata('logged_in');
		redirect('login');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */