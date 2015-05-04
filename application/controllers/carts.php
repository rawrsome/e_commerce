<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Product');
	}

	public function cart()
	{
		$this->session->set_userdata();

		$this->load->view('customer/carts');
	}
}

 // end of carts controller