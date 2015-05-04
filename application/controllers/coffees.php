<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coffees extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Coffee');
	}

	public function index()
	{
		$products = $this->Coffee->get_all_products();

		$this->load->view('customer/products_page', array("products"=>$products));
	}

	

}
//end of main controller