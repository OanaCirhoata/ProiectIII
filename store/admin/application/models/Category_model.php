<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	function get_categories()
	{
		
	}

	function add_categories($postData){
        $data = array(
            'nume' => $postData['nume_categorie'],
        );
        $this->db->insert('categorii',$data);
    }

    function delete_category(){
       
}

 function get_info_category($id_categorie) {
        $this->db->select('*');
        $this->db->from('categorii');
        $this->db->where('id_categorie',$id_categorie);
        // $this->db->join('categorii','categorii.id_categorie=produse.id_categorie');
        $query=$this->db->get();
        return $query->result();
    }


    function update_category($postData){
        $data = array(
            'nume' => $postData['nume_categorie'],
             );

        $this->db->where('id_categorie',$postData['id_categorie']);
        $this->db->update('categorii',$data);

    }

}

