<?php

/**

* Send an email with gmail

*/

class Email extends CI_Controller
{

	function index()
	{
		$this->load->view('newsletter');
	}
	function send() 
	{
	
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('newsletter');
		}
		else 
		{
		
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			
			$this->load->library('email');		
		$this->email->set_newline("\r\n");
		
		$this->email->from('mdunbavan@gmail.com', 'Mark Dunbavan');
		$this->email->to($email);
		$this->email->subject('Newsletter signup confirmation');
		$this->email->message('Thank you for signing up.');
		
		$path = $this->config->item('server_root');
		$file = $path . '/attachments/account-info.txt';
		
		$this->email->attach($file);
		
		if($this->email->send())
		{
			echo 'Email sent';
			$this->load->view('signup_confirmation');
		} else {
			show_error($this->email->print_debugger());
		}
		
		}
			
		}
		
	}
