<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	function get_products()
	{
		$this->db->select('*');
		$this->db->from('produse');
		$query = $this->db->get();

		return $query->result();
	}

	function add_products($postData, $imagine){
        $data = array(
            'nume' => $postData['nume_produs'],
            'descriere' =>  $postData['descriere_produs'],
            'thumbnail' => $imagine,
            'pret' =>  $postData['pret_produs'],
            'discount' =>  $postData['discount_produs'],
            'id_categorie' =>  $postData['categorie_produs']
        );
        $this->db->insert('produse',$data);
    }

    function get_categorie_produs(){
        $this->db->select('*');
        $this->db->from('categorii');
        $query = $this->db->get();
        return $query->result();
    }


    function delete_product($id_produs){
		$this->db->where('id_produs', $id_produs);
        $this->db->delete('produse');
       
    }

    function delete_image(){
        $this->db->where('id_imagine', $id_imagine);
        $this->db->delete('imagini_produse');
    }

    function get_info_product($id_produs) {
        $this->db->select('*');
        $this->db->from('produse');
        $this->db->where('id_produs',$id_produs);
        $this->db->join('categorii','categorii.id_categorie=produse.id_categorie');
        $query=$this->db->get();
        return $query->result();
    }


    function update_product($postData){
        $data = array(
            'nume' => $postData['nume_produs'],
            'descriere' => $postData['descriere_produs'],
            'discount' => $postData['discount_produs'],
            'id_categorie' => $postData['categorie_produs'],
             );

        $this->db->where('id_produs',$postData['id_produs']);
        $this->db->update('produse',$data);

    }

    function get_images_for_product($id_produs)
    {
       $this->db->select('*');
        $this->db->from('imagini_produse');
        $this->db->where('id_produs',$id_produs);
        $query=$this->db->get();
        return $query->result();
    }

    function add_images($id_produs,$imagine)
    {
        $data = array(
            'nume' => $imagine,
            'id_produs' => $id_produs
        );

        $this->db->insert('imagini_produse', $data);
    }

}

