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
		$this->load->view('tabel.php');
	}
}
?>