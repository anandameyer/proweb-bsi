<?php
session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('SiteData');

  }

  
	public function index()
	{
		$this->load->view('header');
		$this->load->view('navigator');
		$this->load->view('login_page');
		$this->load->view('footer');
	}

	public function user_login()
	{
		$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('dasboard');
			}
				else
				{
					$this->load->view('login_page');
				}
			}
			else
			{
				$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
				$result = $this->SiteData->LoginData($data);
				if($result == true)
				{
					$this->set
				}
			}
		}
	}
	
?>