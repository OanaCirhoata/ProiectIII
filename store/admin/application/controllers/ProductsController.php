
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');

		if(!$this->session->userdata('logged_in') || !$this->session->userdata('admin_logged_in')){
			redirect('login','refresh');
		}
	}

	public function get_products()
	{
		
	}

	public function add_products(){

            if (!is_dir('uploads/product_images')) {
                mkdir('./uploads/product_images', 0777, TRUE);
            }
        
    
            $config['upload_path'] = './uploads/product_images';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
        
            $nr_img = count($_FILES['userfile']['name']);
            $file['userfile'] = $_FILES['userfile'];
            for ($i=0; $i < $nr_img; $i++) 
            {   
                $_FILES['userfile']['name'] = $file['userfile']['name'][$i];
                $_FILES['userfile']['type'] = $file['userfile']['type'][$i];
                $_FILES['userfile']['size'] = $file['userfile']['size'][$i];
                $_FILES['userfile']['error'] = $file['userfile']['error'][$i];
                $_FILES['userfile']['tmp_name'] = $file['userfile']['tmp_name'][$i];

                $file_name[$i] = $_FILES['userfile']['name'];
                $file_info = $this->upload->data('userfile');
                
                if (!$this->upload->do_upload('userfile')){
                $uploadError = array('upload_error' => $this->upload->display_errors());
                print_r($uploadError);
            }
    
            }

        $postData = $this->input->post();

        $this->product_model->add_products($postData, $file_name[0]);

        $id_produs = $this->db->insert_id();
        for($i = 0; $i < $nr_img; $i++)
        {
            $this->product_model->add_images($id_produs, $file_name[$i]);
        }
        redirect('produse');


    }


    public function delete_product() {
          
        
    }


    public function edit_product() {

        $id_produs = $this->uri->segment(3);
        $data['produs'] = $this->product_model->get_info_product($id_produs);
        $data['categorii'] = $this->product_model->get_categorie_produs();

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('edit_product',$data);
        $this->load->view('template/footer');
    }

    public function update_product() {

            $config['upload_path'] = './uploads/product_images';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
        
            $nr_img = count($_FILES['userfile']['name']);
            $file['userfile'] = $_FILES['userfile'];
            for ($i=0; $i < $nr_img; $i++) 
            {   
                $_FILES['userfile']['name'] = $file['userfile']['name'][$i];
                $_FILES['userfile']['type'] = $file['userfile']['type'][$i];
                $_FILES['userfile']['size'] = $file['userfile']['size'][$i];
                $_FILES['userfile']['error'] = $file['userfile']['error'][$i];
                $_FILES['userfile']['tmp_name'] = $file['userfile']['tmp_name'][$i];

                $file_name[$i] = $_FILES['userfile']['name'];
                $file_info = $this->upload->data('userfile');
                
                if (!$this->upload->do_upload('userfile')){
                $uploadError = array('upload_error' => $this->upload->display_errors());
                print_r($uploadError);
            }
    
            }
            $postData = $this->input->post();
            $id_produs = $postData['id_produs'];

            for($i = 0; $i < $nr_img; $i++)
            {
                $this->product_model->add_images($id_produs, $file_name[$i]);
            }
              
            $this->product_model->update_product($postData);
            redirect('produse');
    }

    public function add_pictures(){

        if (!is_dir('uploads/product_images')) {
            mkdir('./uploads/product_images', 0777, TRUE);
        }
        
    
            $config['upload_path'] = './uploads/product_images';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
        
            $nr_img = count($_FILES['userfile']['name']);
            $file['userfile'] = $_FILES['userfile'];
            for ($i=0; $i < $nr_img; $i++) 
            {   
                $_FILES['userfile']['name'] = $file['userfile']['name'][$i];
                $_FILES['userfile']['type'] = $file['userfile']['type'][$i];
                $_FILES['userfile']['size'] = $file['userfile']['size'][$i];
                $_FILES['userfile']['error'] = $file['userfile']['error'][$i];
                $_FILES['userfile']['tmp_name'] = $file['userfile']['tmp_name'][$i];
                $file_name[$i] = $_FILES['userfile']['name'];
                $file_info = $this->upload->data('userfile');
                
                if (!$this->upload->do_upload('userfile')){
                $uploadError = array('upload_error' => $this->upload->display_errors());
                print_r($uploadError);
            }
    
            }
    
            $id_produs = $this->input->post('id_anunt_masina');
            for($i=0; $i<$nr_img; $i++){
                $this->admin_model->adauga_imagini_masina($id_masina, $file_name[$i]);
            }
            
            redirect('anunturi/edit_poze_masina/?id='.$id_masina);
        }
    
       

}

