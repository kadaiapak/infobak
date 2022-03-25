<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		

	}

    public function dashboard()
	{	
		$data['title'] = 'Admin Dashboard';
        $data['isi'] = 'v_dashboard';
        $this->load->view('template/wrapper_frontend', $data);
	}
}
