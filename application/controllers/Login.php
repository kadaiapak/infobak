<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_m', 'login');
	}

	public function index()
	{	
		$data['title'] = 'Info BAK';
		$this->form_validation->set_rules('email', 'Email', 'required',
                        array('required' => 'Masukkan email')
                );
		$this->form_validation->set_rules('password', 'Password', 'required',
				array('required' => 'Masukkan password')
		);
		if($this->form_validation->run() ==false){
			$this->load->view('template/auth_header', $data);
        	$this->load->view('v_login');
        	$this->load->view('template/auth_footer');
		}else {
			$post = $this->input->post(null, TRUE);
			$this->login->login($post);
		}
	}

	public function check_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$combine = array('email' => $email, 'password' => $password);
		$query = $this->db->get_where('admin', $combine);
	}
}
