<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	function __construct() {
        $this->proTable = 'products';
        $this->custTable = 'customers';
        $this->ordTable = 'orders';
        $this->ordItemsTable = 'order_items';
    }

    public function getRows($id){
        $this->db->select('*');
        $this->db->from('produse');      
        $this->db->where('id_produs', $id);
        $query = $this->db->get();
        $result = $query->row_array();
   
        
        // Return fetched data
        return !empty($result)?$result:false;
    }

   

    function get_images_for_product($id_produs)
    {
       $this->db->select('*');
        $this->db->from('imagini_produse');
        $this->db->where('id_produs',$id_produs);
        $query=$this->db->get();
        return $query->result();
    }


    function get_size(){
        $this->db->select('*');
        $this->db->from('marimi_adidasi');

        $query = $this->db->get();
        return $query->result();
    }    
    
    function get_products($limit, $start){
        $this->db->select('*');
        $this->db->from('produse');
        $this->db->limit($limit, $start);

        $query = $this->db->get();
        return $query->result();

    }


   function record_count() {
 
       return $this->db->count_all("produse");
 
   }


	function get_category_products($id_categorie){
		$this->db->select('*');
		$this->db->from('produse');
		$this->db->where('id_categorie', $id_categorie);

		$query = $this->db->get();
		return $query->result();
	}

    function get_brands($id_categorie){
        $this->db->select('*');
        $this->db->from('branduri');
        $this->db->where('id_categorie', $id_categorie);

        $query = $this->db->get();
        return $query->result();
    }

    function get_products_by_brand($filtre){
        $this->db->select('*');
        $this->db->from('produse');

        if($filtre['id_categorie'] != null){
            $this->db->where('id_categorie', $filtre['id_categorie']);    
        }
        if($filtre['pret_minim'] != null){
            $this->db->where('pret >=', $filtre['pret_minim']);    
        }
        if($filtre['pret_maxim'] != null){
            $this->db->where('pret <=', $filtre['pret_maxim']);    
        }
        if($filtre['id_marime'] != null){
            $this->db->where('id_marime', $filtre['id_marime']);    
        }

        $query = $this->db->get();
        return $query->result();
    }

}



