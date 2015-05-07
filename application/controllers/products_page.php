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

		$count_categories = $this->Product->get_count_category();

		// var_dump($products);
		// die();
		$cat_name="All Products";

		$this->load->view('customer/products_page', array('products'=>$products, 'count_categories'=>$count_categories,'cat_name'=>$cat_name));

		// var_dump($count_categories);
		// die();

	}

	public function search_products()
	{
		if($this->input->post('sort')=='pop'){
			$products=$this->Product->get_products_by_pop();
		}
		else if($this->input->post('sort')=='high'){
			$products=$this->Product->get_products_by_high();
		}
		else if($this->input->post('sort')=='low'){
			$products=$this->Product->get_products_by_low();
		}
		else{

			//get post thing called 'search_bar' from products_page form
			$search=$this->input->post('search_bar');

			//pass search model and store array result in result
			$products = $this->Product->get_search($search);
			// var_dump($products);
			}	// var_du


			// $products = $this->Product->get_all_products_w_imgs();

			$count_categories = $this->Product->get_count_category();

			// var_dump($products);
			// die();
			$cat_name="All Products";

			$this->load->view('customer/products_page', array('products'=>$products, 'count_categories'=>$count_categories,'cat_name'=>$cat_name));
		
	}

	public function view_category($id){
		if($id==="all"){
			$this->index();
		}
		else{
			$products = $this->Product->get_products_by_category($id);
			$count_categories = $this->Product->get_count_category();
			$cat_name=$count_categories[$id-1]['name'];
			// var_dump($count_categories);
			// die();

			$this->load->view('customer/products_page', array('products'=>$products, 'count_categories'=>$count_categories,'cat_name'=>$cat_name));
		}

	}

	

	public function show_cart()
	{

		$this->load->view('/customer/carts');
	}

}
//end of Products_page controller