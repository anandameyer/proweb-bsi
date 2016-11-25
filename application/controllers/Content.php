<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
    $this->load->database();
  }

  
	public function index()
	{
		$this->load->view('header');
		$this->load->view('navigator');
		$this->load->view('page_editor');
		$this->load->view('footer');
	}
	public function get_news($id)
	{
		$tag = "news";
		$this->load->model('SiteData');
		$data['result'] = $this->SiteData->getByid($id);
		$data['result2'] = $this->SiteData->getBytag($tag);

		$this->load->view('header');
		$this->load->view('navigator');
		$this->load->view('con_page',$data);
		$this->load->view('footer');
	}
	public function news_list($tag)
	{
		$this->load->model('SiteData');
		$data['result'] = $this->SiteData->getBytag($tag);
		$this->load->view('header');
		$this->load->view('navigator');
		$this->load->view('news_tag',$data);
		$this->load->view('footer');
	}

	public function get_all_news()
	{
		$tag = "news";
		$this->load->model('SiteData');
		$data['result'] = $this->SiteData->getBytag($tag);
		$this->load->view('editor',$data);
	}
}
?>