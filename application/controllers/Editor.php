<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {

	public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
    $this->load->database();
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  }

  
	public function index()
	{
		$tag = "news";
		$this->load->model('SiteData');
		$data['result'] = $this->SiteData->getBytag($tag);

		$this->load->view('editor',$data);
	}

	public function insertData()
	{
     date_default_timezone_set('Asia/Jakarta');
	 $data = $this->input->post();
     $date = date("Y-m-d");

     $user = $this->session->username;
     $this->load->model('SiteData');
     $id = $this->SiteData->getUserID($user);

    	$query = array(
        'tag' => $data['tag'],
      	'title' => $data['title'],
      	'content' => $data['content'],
        'Dtime' => $date,
        'url' => $data['url'],
        'user' => $id
      	);

    $this->SiteData->pushData($query);
	}

	public function updateData($id)
	{
		$data = $this->input->post();
		$this->load->model('SiteData');
		$this->SiteData->updateData($id,$data);
    	$this->index();
	}
	public function getNews($id)
	{
    	$data['id'] = $id;
		$this->load->model('SiteData');
		$data['result'] = $this->SiteData->getByid($id);
		$this->load->view('updater',$data);
	}
}
?>