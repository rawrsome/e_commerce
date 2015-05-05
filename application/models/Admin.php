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
		$query="SELECT images.img_url,products.id,products.inventory,COUNT(order_has_product	.product_id) AS quantity_sold from images
				LEFT JOIN products
				ON products.id=images.product_id
				LEFT JOIN order_has_product
				ON products.id=order_has_product.product_id
				LEFT JOIN orders
				ON order_has_product.order_id=orders.id
				WHERE orders.status='shipped' AND images.img_status='main'
				GROUP BY order_has_product.product_id";

		return $this->db->query($query)->result_array();
	}

	public function update_product($product){
		//
		$query="UPDATE products
				SET name=?,description=?,price=?,category_id=?,updated_at=NOW()";
		return $this->db->query($query,array($product['name'],$product['description'],$product['price'],$product['category_id']));
	}

	public function new_category($category){
		$query="INSERT INTO categories (name)
				VALUES (?)";
		return $this->db->query($query,array($category));
	}
	public function update_category($category){
		$query="UPDATE categories
				SET name=?
				WHERE id=?";
		return $this->db->query($query,array($category['name'],$category['id']));
	}
	public function delete_category($category){
		$query="DELETE FROM categories WHERE id=?";
		return $this->db->query($query,array($category));
	}

	public function show_order($order){

	}






}
//  end of Model