<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('public/index');
	}
	
	public function gallery()
	{
		$this->load->view('public/gallery');
	}
	
	public function contact()
	{
		$this->load->view('public/contactform');
	}
	
	public function enquiry()
	{
		$this->load->view('public/enquiryform');
	}
	
	
	public function universities_colleges()
	{
		$this->load->view('public/collegeuniversity');
	}
	
	public function scholarships()
	{
		$this->load->view('public/scholarship');
	}
	
	public function login()
	{
		$this->load->view('public/login');
	}
	
	function send_contact(){
		
	$this->load->library('form_validation');
	// name, error message, validation rule
	$this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
	$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
	$this->form_validation->set_rules('inputEmail', 'Email Address', 'trim|required|valid_email');
	$this->form_validation->set_rules('subject', 'Subject', 'trim|required');	
	$this->form_validation->set_rules('message', 'Enter your message', 'trim|required');
		if($this->form_validation->run()==FALSE){
		
		$this->contact();
		
		}else{
			$enquiry_data= array(
				
							'firstName'=> $this->input->post('firstName'),
							'lastName'=> $this->input->post('lastName'),
							'firstName'=> $this->input->post('full_name'),
							'inputEmail'=> $this->input->post('inputEmail'),
							'subject'=> $this->input->post('subject'),
							'message'=> $this->input->post('message'),
							'reply_status'=> '',
							'date_sent'=>date('Y-m-d')
							
		);
			
			$this->Model->send_request($enquiry_data);
			
			$this->load->view('includes/contact_submitted');
		}
	}	


function send_enquiry(){
		
	$this->load->library('form_validation');
	// name, error message, validation rule
	$this->form_validation->set_rules('inputName" ', 'Your Name', 'trim|required');
	$this->form_validation->set_rules('phoneNumber', 'Please enter phone number', 'trim|required');
	$this->form_validation->set_rules('emailId', 'Email Address', 'trim|required|valid_email');
	/*
	$this->form_validation->set_rules('subject', 'Subject', 'trim|required');	
		$this->form_validation->set_rules('message', 'Enter your message', 'trim|required');*/
	
		if($this->form_validation->run()==FALSE){
		
		$this->enquiry();
		
		}else{
			$enquiry_data= array(
				
							'inputName'=> $this->input->post('inputName'),
							'phoneNumber'=> $this->input->post('phoneNumber'),
							'emailId'=> $this->input->post('emailId'),
							'inputEmail'=> $this->input->post('inputEmail'),
							'sslcMarks'=> $this->input->post('sslcMarks'),
							'puMarks'=> $this->input->post('puMarks'),
							'graduationMarks'=> $this->input->post('graduationMarks'),
							'universityBoard'=> $this->input->post('universityBoard'),
							'course'=> $this->input->post('course'),
							'address'=> $this->input->post('address'),
							'reply_status'=> '',
							'date_sent'=>date('Y-m-d')
							
		);
			
			$this->Model->add_data("enquiries_tbl", $enquiry_data);
			
			$this->load->view('includes/contact_submitted');
		}
	}	
}

/* End of file welcome.php */
