<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->instagram_api->access_token = $this->session->userdata('instagram-token');
		
	}
	
	function index() {
		
		// Get the user data
	
		$this->load->model('data_model');
		$data['user_data'] = $this->instagram_api->getUser('387');
		$data['rows'] = $this->data_model->getAll();
		$popular_media = $this->instagram_api->getPopularMedia();
		$data['main_view'] = 'home';
		$this->load->vars($data);
		$this->load->view('template');
		// Loop through the data returned by Instagram
	}

}