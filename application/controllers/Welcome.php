<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
    $this->load->database();
  }

  
	public function index()
	{
		$this->load->model('SiteData');
		$data['result'] = $this->SiteData->pullData();


		$this->load->view('header');
		$this->load->view('navigator');
		$this->load->view('body',$data);
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('header');
		$this->load->view('navigator');
		$this->load->view('about');
		$this->load->view('footer');
	}

	
}
?>