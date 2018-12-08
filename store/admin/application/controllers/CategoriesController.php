<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}

	public function get_categories()
	{
		
	}

	public function add_categories(){

        $postData = $this->input->post();

        $this->category_model->add_categories($postData);
        redirect('categorii');
    }

    public function delete_category() {
    
       
    }

    public function edit_category() {

        $id_categorie = $this->uri->segment(3);
        $data['categorie'] = $this->category_model->get_info_category($id_categorie);
 

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('edit_category',$data);
        $this->load->view('template/footer');
    }

    public function update_category() {
       
        $postData = $this->input->post();
        $this->category_model->update_category($postData);
        redirect('categorii');
    }

}