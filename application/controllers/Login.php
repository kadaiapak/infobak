<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_m', 'login_model');
	}

	public function index()
	{	
		$data['title'] = 'Info BAK';
		$this->load->view('template/auth_header', $data);
		$this->load->view('v_login');
		$this->load->view('template/auth_footer');

	}

	public function check_login()
	{
		// $email = html_escape($this->input->post('email'));
		// $password = html_escape($this->input->post('password'));
		$post = $this->input->post(null, TRUE);
		$this->login_model->adminLoginFunction($post);
		
		$this->session->set_flashdata('error_mesage','Invalid Login Details');
		redirect(base_url(). 'login', 'refresh');
	}
}
