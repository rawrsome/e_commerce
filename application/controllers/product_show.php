<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_show extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Product');
	}

	public function show_products($id)
	{
		$product = $this->Product->get_product($id);
		var_dump($product);
		die();
		$this->load->view('customer/product_show', array('id'=>$id, 'name'=>$product['name'], 'description'=>$product['description'], 'price'=>$product['price']));
	}

}

 // end of Product_show controller