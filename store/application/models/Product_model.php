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


}



