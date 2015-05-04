<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Product');
	}

	public function index()
	{
		// display products & categories in view/customer/products_page
		$products = $this->Product->get_all_products();
		$categories = $this->Product->get_categories();

		// var_dump($products);
		// die();

		$this->load->view('customer/products_page', array('products'=>$products, 'categories'=>$categories));
	}

	public function search()
	{
		// $data['query'] = $this->Product->get_search();
		// $this->load->view('products', );

		$search = $this->Product->get_search();


		$this->load->view('customer/product_show', array('name'=>$search['name'], 'description'=>$search['description']));
	}

}
//end of Products_page controller