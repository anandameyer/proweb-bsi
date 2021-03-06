<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Uploader extends CI_Controller {

  public function __construct()
  		{
    			// Call the CI_Model constructor
    			parent::__construct();
                //$this->load->library('upload');
    			//$this->load->helper(array('form', 'url'));
    			$this->load->database();
  		}
  public function index()
        {
                //$this->load->view('upload_form', array('error' => ' ' ));
                $config['upload_path']          = './assets/upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('file'))
                {
                    $data = $this->upload->data();
                    $this -> output -> set_header("Pragma: no-cache");
                    $this -> output -> set_header("Access-Control-Allow-Origin: *");
                    $this -> output -> set_header("Cache-Control: no-store, no-cache");
                    $this -> output -> set_content_type('application/json') -> set_output(json_encode($data));
                };

        }


}
?>