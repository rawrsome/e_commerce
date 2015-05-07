<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Product');
	}

	public function index()
	{
		$this->load->view('customer/carts');
	}

	public function carts()
	{
		// set session if it is not set
		if(! $this->session->userdata('cart_total'))
		{
			// intializing the the userdata to a cart
			$this->session->set_userdata('cart_total', array());
		}

		$cart_total = $this->session->userdata('cart_total');

		
		$cart_total[] = $this->input->post();
		$this->session->set_userdata('cart_total', $cart_total);
		
		$cart_count = 0;
		// looping through $cart_total array to find the qty
		for($i = 0; $i < count($cart_total); $i++)
		{
			$cart_count += $cart_total[$i]['qty']; 
		}
		// echo $cart_count;
		// var_dump($this->input->post());
		// var_dump($this->session->userdata('cart_total'));
		// die();

		$this->session->set_userdata('cart_counts', $cart_count);
		// echo $this->session->userdata('cart_counts'). " line 45";

		$message = "Item added";
		$this->session->set_flashdata("confirmation", $message);

		redirect('products_page');
	}

	public function destroy($item)
	{

		$temp=$this->session->userdata('cart_total');
		unset($temp[$item]);
		$deletable_cart=array();
		// $deletable_cart=$temp;
		foreach ($temp as $t) {
			$deletable_cart[]=$t;
		}
		// var_dump($deletable_cart);

		$this->session->set_userdata('cart_total',$deletable_cart);

		$cart_count = 0;
		$cart_total=$this->session->userdata('cart_total');
		// looping through $cart_total array to find the qty
		for($i = 0; $i < count($cart_total); $i++)
		{
			$cart_count += $cart_total[$i]['qty']; 
		}
		// echo $cart_count;
		// var_dump($this->input->post());
		// var_dump($this->session->userdata('cart_total'));
		// die();

		$this->session->set_userdata('cart_counts', $cart_count);

		// $temp=$this->session->unset_userdata($cart_total['']);
		redirect('/products_page/show_cart');
	}

	public function update()
	{

	}
}

 // end of carts controller