<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	/*public function signin()
	{
		if ($this->form_validation->run() == FALSE) {

		    $this->load->view('layouts/app', [
				'title' => 'Login',

				'right_content' => 'auth/login',
			]);
			
        }
        else {
            return 1;
        }
		
	}*/

	public function signin()
	{
		echo $email = $this->input->post('email');
		echo $pass  = $this->input->post('password') ;

	    $this->load->view('layouts/app', [
			'title' => 'Login',

			'right_content' => 'auth/login',
		]);	
	}


	// get all post
	public function signup()
	{
		$email = $this->input->post('email');
		$pass  = $this->input->post('password') ;
		$pass_confirm  = $this->input->post('password_confirm') ;

		//echo md5($pass);

		echo $pass = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>12]);

		$this->load->view('layouts/app', [
			'title' => 'Register',

			'right_content' => 'auth/register',
		]);
	}


	public function logout()
	{
		# code...
	}
}
