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
		$products = $this->Product->get_all_products_w_imgs();
		$categories = $this->Product->get_categories();
		// display number of categories
		$count_category = $this->Product->get_category_count();
		// var_dump($count_category);
		// die();

		$this->load->view('customer/products_page', array('products'=>$products, 'categories'=>$categories, 'count_category'=>$count_category));
	}

	public function search()
	{
		//get post thing called 'search_bar' from products_page form
		$search=$this->input->post('search_bar');

		//pass search model and store array result in result
		$result = $this->Product->get_search($search);


		$this->load->view('customer/product_show', array('name'=>$search['name'], 'description'=>$search['description']));
	}

	public function show_cart()
	{
		$this->load->view('/customer/carts');
	}

}
//end of Products_page controller