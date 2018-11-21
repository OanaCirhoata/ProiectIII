<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_m','im');
		
	}

	
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('index');
		$this->load->view('layout/footer');
	}
	public function about()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('about');
		$this->load->view('layout/footer');
	}

	public function wishlist()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('wishlist');
		$this->load->view('layout/footer');
	}

	public function cart()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('cart');
		$this->load->view('layout/footer');
	}

	public function checkout()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('checkout');
		$this->load->view('layout/footer');
	}

	public function contact()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('contact');
		$this->load->view('layout/footer');
	}

	public function order_complete()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('order_complete');
		$this->load->view('layout/footer');
	}

	public function product_detail()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('product_detail');
		$this->load->view('layout/footer');
	}

	public function shop()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('shop');
		$this->load->view('layout/footer');
	}
}