<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model
{
    public function login($post)
    {
        $params['email'] = $post['email'];
        $params['password'] = $post['password'];
    }

    public function register()
    {
        
    }
}
