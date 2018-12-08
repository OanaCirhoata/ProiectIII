<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');

		if(!$this->session->userdata('logged_in') || !$this->session->userdata('admin_logged_in')){
			redirect('login','refresh');
		}

	}

	public function index()
	{
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('template/footer');
	}

}

