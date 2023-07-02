<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Users_model');

	}

	public function index()
	{				
		$data['website_info'] = $this->Users_model->fetch_all("website_info");
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/pages/homepage',$data);
		$this->load->view('frontend/include/footer',$data);

	}

	public function about_page()
	{
		$data['website_info'] = $this->Users_model->fetch_all("website_info");
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/pages/about',$data);
		$this->load->view('frontend/include/footer',$data);

	}

	public function booking_page()
	{
		$this->load->view('frontend/include/header');
		$this->load->view('frontend/pages/booking');
		$this->load->view('frontend/include/footer');

	}

	public function contact_page()
	{
		$data['website_info'] = $this->Users_model->fetch_all("website_info");
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/pages/contact',$data);
		$this->load->view('frontend/include/footer',$data);

	}
	
	
}
