<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		// Set the instagram library access token variable
		$this->instagram_api->access_token = $this->session->userdata('instagram-token');
	}

	/*
function index() {
		$this->load->model('site_model');
		$data['records'] = $this->site_model->getAll();
		$this->load->view('home', $data);
	}
*/
	function index() {
	
		$this->load->model('data_model');
		$data['rows'] = $this->data_model->getAll();
		$data['popular_media'] = $this->instagram_api->getPopularMedia();
		//$this->load->view('home', $data);
		$data['main_view'] = 'home';
		$this->load->vars($data);
		$this->load->view('template');
	}

}