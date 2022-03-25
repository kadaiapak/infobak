<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model
{
    public function adminLoginFunction($post)
    {
        $combine = array('email' => $post['email'], 'password' => $post['password']);
		$query = $this->db->get_where('admin', $combine);
		if($query->num_rows() > 0){
			$row = $query->row();
			$this->session->set_userdata('login_type','admin');
			$this->session->set_userdata('admin_login','1');
			$this->session->set_userdata('admin_id',$row->id);
			$this->session->set_userdata('login_user_id',$row->id);
			$this->session->set_userdata('name',$row->name);
	
			$this->session->set_flashdata('flash_mesage', 'Login Successful');
			redirect(base_url(). 'dashboard');	
		}
    }

    public function register()
    {
        
    }
}
