<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');

		$this->check_logged_in();
	}

	public function check_logged_in()
	{
		return true;
		return redirect('/');
	}


	public function index()
	{
		$this->load->view('layouts/app', [
			'title' => 'Admin Channel Moto',

			'top_bar' => 'components/top_bar',
			'left_sidebar' => 'components/left_sidebar',

			'right_content' => 'admin/dashboard',
		]);
	}


	// get all post
	public function posts()
	{
		$this->load->view('layouts/app',[
			'title' => 'Posts',
			
			'top_bar' => 'components/top_bar',
			'left_sidebar' => 'components/left_sidebar',

		]);
	}
}
