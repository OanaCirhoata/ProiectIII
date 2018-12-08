<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenticateController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login(){

		if($this->session->userdata('logged_in') && $this->session->userdata('admin_logged_in')){
			redirect('dashboard','refresh');
		}

		$this->load->view('auth/login');
	}

	public function verify_admin_login()
	{
		$postData = $this->input->post();
        $validate = $this->user_model->admin_login($postData);

        // echo "Validate: <pre>".print_r($validate, true)."</pre>";
        // die();
    
		if(count($validate)>0)
		{
			// echo "Set session...";
			$this->set_session($validate);
			redirect('dashboard','refresh');
		}
		else
			redirect('login','refresh');
	}

	public function set_session($validate){
        
        $sess_data = array(
            'user_id' => $validate[0]->id_angajat,
            'email' => $validate[0]->email,
            'logged_in' => true,
            'admin_logged_in' => true
        );

        // echo "SESS DATA: <pre>".print_r($sess_data,true)."</pre>";

        $this->session->set_userdata($sess_data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
