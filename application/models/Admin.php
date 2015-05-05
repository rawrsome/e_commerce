<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

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

	public function update_product($product){
		//
		$query="UPDATE products
				SET name=?,description=?,price=?,category_id=?,updated_at=NOW()";
	}

	public function new_category($category){

	}
	public function get_category_id_by_name($name){
		$query="SELECT id FROM ";
	}

	public function show_order($order){

	}


//-------ADMIN LOGIN
	public function login_user($post)
	{
		$email = $post['log_email'];
		$password = $post['log_password'];
		$query = "SELECT * FROM admins WHERE admins.email = ?";
		return $this->db->query($query, array($email))->row_array();
		
	}

	public function login_user_reg($post)
	{
		$query = "SELECT * FROM admins WHERE admins.email = ?";
		return $this->db->query($query, array($post))->row_array();
	}
//-------ADMIN LOGIN





}
//  end of Model