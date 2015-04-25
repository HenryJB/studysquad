<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/adminindex');
	}
	
	public function addCarousel()
	{
		$this->load->view('admin/addCarouselImage');
	}
	
	public function addCollegeUniversity()
	{
		$this->load->view('admin/addCollegeUniversity');
	}
	
	public function addEventsAndNews()
	{
		$this->load->view('admin/addEventsAndNews');
	}
	
	
	public function addPageComment()
	{
		$this->load->view('admin/addHomePageComment');
	}
	
	public function addReadMore()
	{
		$this->load->view('admin/addReadMorePageComment');
	}
	
	public function addUserInfo()
	{
		$this->load->view('admin/addUserInfo');
	}
	
	public function views()
	{
		$this->load->view('admin/adminview');
	}
	
	public function addSiteVisitorsCount()
	{
		$this->load->view('admin/addSiteVisitorsCount');
	}
	
	public function viewCarouselImage()
	{
		$this->load->view('admin/viewCarouselImage');
	}
	
	public function viewCollegeUniversity()
	{
		$this->load->view('admin/viewCollegeUniversity');
	}
	
	public function viewEventAndNews()
	{
		$this->load->view('admin/viewEventAndNews');
	}
	
	/*
	public function viewEventAndNews()
		{
			$this->load->view('admin/viewEventAndNews');
		}*/
	
	
	public function viewHomePageComment()
	{
		$this->load->view('admin/viewHomePageComment'); 
	}
	
	public function viewReadMorePageComment()
	{
		$this->load->view('admin/viewReadMorePageComment'); 
	}
	
	public function viewSiteVisitorsCount()
	{
		$this->load->view('admin/viewSiteVisitorsCount'); 
	}
	
	public function viewUserInfo()
	{
		$this->load->view('admin/viewUserInfo'); 
	}
}

/* End of file admin.php */
