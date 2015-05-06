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
		// passing $id as parameter through the product_view page to show individual products
		$product_imgs = $this->Product->get_2nd_imgs_for_product($id);
		$product=$this->Product->get_product($id);
		$similar=$this->Product->get_similar($product['category_id']);
		// var_dump($product_imgs);
		// die();
		$this->load->view('customer/product_show', array('product'=>$product,'product_imgs'=>$product_imgs,'similar'=>$similar));
	}

}

 // end of Product_show controller