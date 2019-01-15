
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('product_model');
	}

	public function index()
	{		

		$config = array(); 
        $config["base_url"] = base_url() . "productscontroller/index"; 
        $config["total_rows"] = $this->product_model->record_count(); 
        $config["per_page"] = 12; 
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
            

		$data = array(
			'produse' => $this->product_model->get_products($config["per_page"], $page), 
			'categorii' => $this->product_model->get_categories(),
			'links'   => $this->pagination->create_links(),
			
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('shop', $data);
		$this->load->view('layout/footer');
	}


	public function product_detail($id_produs)
	{
		$data = array(
			'produs' => $this->product_model->getRows($id_produs),
			'imagini' => $this->product_model->get_images_for_product($id_produs),
			'marimi' => $this->product_model->get_size(), 
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('product_detail', $data);
		$this->load->view('layout/footer');
	}

	public function get_category_products($id_categorie){
		$data = array(
			'id_categorie' => $id_categorie,
			'produse' => $this->product_model->get_category_products($id_categorie),
			'branduri' => $this->product_model->get_brands($id_categorie),
		);

		$this->load->view('shop/template/header');
		$this->load->view('shop/template/filtre', $data);
		$this->load->view('shop/categorie');
		$this->load->view('shop/template/footer');
	}

	public function addToCart(){

		$id_produs = $this->input->post('id_produs');
		$marime = $this->input->post('marime');
		$cantitate = $this->input->post('cantitate');

        // Fetch specific product by ID
        $product = $this->product_model->getRows($id_produs);
       
        // Add product to the cart
        $data = array(
            'id'    => $id_produs,
            'qty'    => $cantitate,
            'name'    => $product['nume'],	
            'price'    => $product['pret'],            
            'image' => $product['thumbnail'],
            'size'  => $marime
        );
        $insert = $this->cart->insert($data);
        
        // Redirect to the cart page
        // redirect('cart');
        // echo 'Product: <pre>'.print_r($product,true).'</pre>';
        // echo 'Insert: <pre>'.print_r($insert,true).'</pre>';
   		return json_encode(true);
    }
	
	public function addComment(){
		$postData = $this->input->post();

		$this->product_model->addComment($postData);

		$this->session->set_flashdata('comment_success', 'Comment is waiting for approval.');

		redirect('produs/'.$postData['id_produs'].'/#review');

	}

     public function ajax_load_products_for_category(){

    	$filtre['id_categorie'] = $this->input->post('id_category');
    	$filtre['pret_minim'] = $this->input->post('pret_minim');
    	$filtre['pret_maxim'] = $this->input->post('pret_maxim');
    	$filtre['id_marime'] = $this->input->post('id_marime');

    	$produse = $this->product_model->get_products_by_brand($filtre);


    	$res = "";
    	foreach($produse as $produs){
							
		$res.='<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url('.base_url("uploads/product-images/").$produs->thumbnail.')">
										<p class="tag"><span class="new">New</span></p>
										<div class="cart">
											<p><span><a href="'.base_url("#").'"><i class="icon-heart3"></i></a></span></p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="'.base_url("produs/").$produs->id_produs.'">'.$produs->nume.'</a></h3>
										<p class="price"><span>'.$produs->pret.' RON</span></p>
									</div>
								</div>
							</div>';
							
		}

		echo json_encode($res);
    } public function ajax_load_products_for_category(){

    	$filtre['id_categorie'] = $this->input->post('id_category');
    	$filtre['pret_minim'] = $this->input->post('pret_minim');
    	$filtre['pret_maxim'] = $this->input->post('pret_maxim');
    	$filtre['id_marime'] = $this->input->post('id_marime');

    	$produse = $this->product_model->get_products_by_brand($filtre);


    	$res = "";
    	foreach($produse as $produs){
							
		$res.='<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url('.base_url("uploads/product-images/").$produs->thumbnail.')">
										<p class="tag"><span class="new">New</span></p>
										<div class="cart">
											<p><span><a href="'.base_url("#").'"><i class="icon-heart3"></i></a></span></p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="'.base_url("produs/").$produs->id_produs.'">'.$produs->nume.'</a></h3>
										<p class="price"><span>'.$produs->pret.' RON</span></p>
									</div>
								</div>
							</div>';
							
		}

		echo json_encode($res);
    }
}

