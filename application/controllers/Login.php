<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //$this->load->library('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    //$this->session->start();
    $this->load->model('SiteData');
    $this->load->helper(array('form'));

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
		$this->form_validation->set_rules('username','username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','password','trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			if(isset($this->session->logged_in))
			{
				$this->logged_in();
			}
				else
				{
					$this->session->sess_destroy();
					$this->logged_out();
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
					$userdata = array(
						'logged_in'=>true,
						'username'=>$this->input->post('username'));
					$this->session->set_userdata($userdata);
					$this->logged_in();
				}
			}
		}

		function logged_in()
		{
			$this->load->view('header');
			$this->load->view('navigator');
			$this->load->view('dasboard');
			$this->load->view('footer');
		}

		function logged_out()
		{
			$this->load->view('header');
			$this->load->view('navigator');
			$this->load->view('login_page');
			$this->load->view('footer');
		}

		public function logout($data)
		{
			$userdata = array(
				'logged_in',
				'username');
			$this->session->unset_userdata($userdata);
			$this->session->sess_destroy();
			$this->logged_out();
		}
	}
	
?>