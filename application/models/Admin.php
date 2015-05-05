<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

	

	public function get_categories()
	{
		$query = "SELECT DISTINCT name from categories";

		return $this->db->query($query)->result_array();
	}

	

//----------SHOW ALL ORDERS
	public function get_orders()
	{
		$query="SELECT orders.id AS order_id,billings.first_name,billings.last_name,DATE(orders.created_at) AS Date,billings.address,billings.city,billings.state,billings.zipcode,SUM(products.price) AS Total,orders.status FROM orders
			LEFT JOIN billings
			ON orders.billing_id=billings.id
			left join order_has_product
			on orders.id=order_has_product.order_id
			left join products
			on order_has_product.product_id=products.id
			GROUP BY orders.id DESC";
		return $this->db->query($query)->result_array();
	}

//----------SHOW ORDERS BY STATUS (SHIPPED, ETC...)
	public function get_orders_by_status($status){
		$query="SELECT orders.id AS order_id,billings.first_name,DATE(orders.created_at) AS Date,billings.address,billings.city,billings.state,billings.zipcode,SUM(products.price) AS Total,orders.status FROM orders
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

//----------SHOW ALL PRODUCTS
	public function get_products_admin(){
		$query="SELECT images.img_url,products.name,products.id,products.inventory,COUNT(order_has_product.product_id) AS quantity_sold from images
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

//----------SHOW INDIVIDUAL ORDER
	public function show_order($id){
		$query="SELECT products.name,COUNT(products.id) AS quantity,SUM(products.price) AS total,orders.status, billings.*,shippings.* FROM orders
				LEFT JOIN billings
				ON orders.billing_id=billings.id
	            LEFT JOIN shippings
	            ON orders.shipping_id=shippings.id
				left join order_has_product
				on orders.id=order_has_product.order_id
				left join products
				on order_has_product.product_id=products.id
	            WHERE orders.id=?
				GROUP BY products.id";

		return $this->db->query($query,array($id));
	}




//----------PRODUCTS
	public function new_product($product){
		$query="INSERT INTO products (name,description,category_id,created_at,updated_at)
				VALUES (?,?,?,NOW(),NOW())";
		return $this->db->query($query,array($product['name'],$product['description'],$product['category_id']));
	}

	public function update_product($product){
		
		$query="UPDATE products
				SET name=?,description=?,price=?,category_id=?,updated_at=NOW()
				WHERE id=?";
		
		return $this->db->query($query,array($product['name'],$product['description'],$product['price'],$product['category_id'],$product['id']));			

	}

	public function delete_product($id){
		$query="DELETE FROM products
				WHERE id=?";
		return $this->db->query($query,array($id));
	}
//----------PRODUCTS


//----------IMAGES
	public function new_image($image){
		$query="INSERT INTO images (img_url,img_status,product_id)
				VALUES (?,'secondary',?)";
		return $this->db->query($query,array($image['img_url'],$image['product_id']));
	}

	public function update_image($image){
		$query="UPDATE images
				SET img_status=?
				WHERE id=?";
		return $this->db->query($query,array($image['img_status'],$image['id']));
	}

	public function delete_image($id){
		$query="DELETE FROM images WHERE id=?";
		return $this->db->query($query,array($id));
	}
	public function get_category_id_by_name($name){
		$query="SELECT id FROM categories";
	}
//----------IMAGES


//----------CATEGORIES
	public function new_category($category){
		$query="INSERT INTO categories (name)
				VALUES (?)";
		return $this->db->query($query,array($category));
	}
	public function update_category($category){	//pencil button on dropdown
		$query="UPDATE categories
				SET name=?
				WHERE id=?";
		return $this->db->query($query,array($category['name'],$category['id']));
	}
	public function delete_category($category){
		$query="DELETE FROM categories WHERE id=?";
		return $this->db->query($query,array($category));
	}
//----------CATEGORIES
	


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