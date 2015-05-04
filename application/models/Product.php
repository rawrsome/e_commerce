<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function get_all_products()
	{
		$query = "SELECT * FROM products";

		return $this->db->query($query)->result_array();
	}

	public function get_categories()
	{
		$query = "SELECT DISTINCT name from categories";

		return $this->db->query($query)->result_array();
	}

	public function get_product($id)
	{
		$query = "SELECT * FROM products WHERE products.id = ?";

		return $this->db->query($query, array($id))->row_array();
	}


	public function get_orders()
	{
		$query="SELECT orders.id AS order_id,products.name,SUM(products.price),billings.first_name,orders.created_at,billings.address,billings.city,billings.state,billings.zipcode,orders.status FROM orders
				LEFT JOIN billings
				ON orders.billing_id=billings.id
				left join order_has_product
				on orders.id=order_has_product.order_id
				left join products
				on order_has_product.product_id=products.id
				GROUP BY orders.id DESC";
		return $this->db->query($query)->result_array();
	}
	public function get_orders_by_status($status){
		$query="SELECT orders.id AS order_id,products.name,SUM(products.price),billings.first_name,orders.created_at,billings.address,billings.city,billings.state,billings.zipcode,orders.status FROM orders
				LEFT JOIN billings
				ON orders.billing_id=billings.id
				left join order_has_product
				on orders.id=order_has_product.order_id
				left join products
				on order_has_product.product_id=products.id
				WHERE orders.status=?
				GROUP BY orders.id DESC";
		return $this->db->query($query,array($status))->result_array();
	}

	public function get_products_admin(){
		$query="SELECT products.id, products.name,products.inventory, COUNT(order_has_product.product_id) from products
				LEFT JOIN order_has_product
				ON products.id=order_has_product.product_id
				left JOIN orders
				ON order_has_product.order_id=orders.id
				WHERE orders.status='shipped'
				GROUP BY products.id";
				return $this->db->query($query)->result_array();
	}



	public function get_search()
	{
		// $match = $this->input->post('search');
		// $this->db->like('name', $match);
		// $this->db->or_like('description', $match);
		// $this->db->or_like('price', $match);

		// $query = $this->db->get('products');
		// return $query->result();

		$query = "SELECT * FROM prodcuts WHERE name = ?";

		return $this->db->query($query)->result_array();

	}


}
//  end of Model