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
		// $data['title'] = 'Info BAK';
		// $this->form_validation->set_rules('email', 'Email', 'required',
        //                 array('required' => 'Masukkan email')
        //         );
		// $this->form_validation->set_rules('password', 'Password', 'required',
		// 		array('required' => 'Masukkan password')
		// );
		// if($this->form_validation->run() ==false){
		// 	$this->load->view('template/auth_header', $data);
        // 	$this->load->view('v_login');
        // 	$this->load->view('template/auth_footer');
		// }else {
		// 	$post = $this->input->post(null, TRUE);
		// 	$this->login->login($post);
		// }
		$data['title'] = 'Info BAK';
		$this->load->view('template/auth_header', $data);
		$this->load->view('v_login');
		$this->load->view('template/auth_footer');

	}

	public function check_login()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$combine = array('email' => $email, 'password' => $password);
		$query = $this->db->get_where('admin', $combine);
		var_dump($query->num_rows());
		if($query->num_rows() > 0){
			$row = $query->row();
			$this->session->set_userdata('login_type','admin');
			$this->session->set_userdata('admin_login','1');
			$this->session->set_userdata('admin_id',$row->id);
			$this->session->set_userdata('login_user_id',$row->id);
			$this->session->set_userdata('name',$row->name);
		}else {

		}
	}
}
