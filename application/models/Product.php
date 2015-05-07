<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {


//----------LIST ALL PRODUCTS WITH main IMAGES
	public function get_all_products_w_imgs()
	{
		$query = "SELECT products.*,images.img_url,images.img_status,images.id AS img_id FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE images.img_status='main'";

		return $this->db->query($query)->result_array();
	}

//----------GET ALL IMAGES (main and secondary) FOR A SPECIFIC PRODUCT
	public function get_2nd_imgs_for_product($id){
			$query="SELECT * FROM images
					WHERE product_id=? AND img_status='secondary'";

		return $this->db->query($query,array($id))->result_array();
	}

	public function get_products_by_category($id){
		$query = "SELECT products.*,images.img_url,images.img_status,images.id AS img_id FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE images.img_status='main' AND products.category_id=?";

		return $this->db->query($query,array($id))->result_array();
	}

	public function get_products_by_pop(){
		$query="SELECT images.img_url,products.*,COUNT(order_has_product.product_id) AS quantity_sold from images
				LEFT JOIN products
				ON products.id=images.product_id
				LEFT JOIN order_has_product
				ON products.id=order_has_product.product_id
				WHERE images.img_status='main'
				GROUP BY order_has_product.product_id
                ORDER BY quantity_sold DESC";
        return $this->db->query($query)->result_array();
	}
	public function get_products_by_high()
	{
		$query = "SELECT products.*,images.img_url,images.img_status,images.id AS img_id FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE images.img_status='main'
				ORDER BY products.price DESC";

		return $this->db->query($query)->result_array();
	}

	public function get_products_by_low()
	{
		$query = "SELECT products.*,images.img_url,images.img_status,images.id AS img_id FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE images.img_status='main'
				ORDER BY products.price";

		return $this->db->query($query)->result_array();
	}


//----------GET RANDOM PRODUCTS IN SAME CATEGORY
	public function get_similar($category){
		$query="SELECT * FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE category_id=?
				ORDER BY RAND()
				LIMIT 6";
		return $this->db->query($query,array($category))->result_array();
	}


	public function get_count_category()
	{
		$query = "SELECT *, COUNT(category_id) AS count FROM products
				  LEFT JOIN categories
				  ON products.category_id = categories.id
				  GROUP BY category_id";

		return $this->db->query($query)->result_array();
	}

	

	public function get_category_count()
	{
		$query = "SELECT *, COUNT(products.id) AS count FROM products 
				  LEFT JOIN categories 
				  ON categories.id = products.category_id
				  GROUP BY products.category_id";

		// $query = "SELECT categories.id, COUNT(*) FROM categories GROUP BY categories"

		// return $this->db->query($query)->result_array();
	}

	
	public function get_price_cart($price)
	{
		$query = "SELECT products.price FROM products WHERE products.id = ?";

		return $this->db->query($query)->row_array();
	}






	public function get_product($id)
	{
		$query = "SELECT * FROM products 
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE products.id = ?";

		return $this->db->query($query, array($id))->row_array();
	}

	public function get_search($name)
	{

		$name='%'.$name.'%';
		$query = "SELECT products.*,images.img_url,images.img_status,images.id AS img_id FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE images.img_status='main' AND products.name LIKE ?";

		//pass parameter 'name' to query function
		return $this->db->query($query,array($name))->result_array();
	}
	public function get_sorted_search($name)
	{

		$name='%'.$name.'%';
		$query = "SELECT products.*,images.img_url,images.img_status,images.id AS img_id FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE images.img_status='main' AND products.name LIKE ?";

		//pass parameter 'name' to query function
		return $this->db->query($query,array($name))->result_array();
	}

	public function get_cart()
	{
		$query = "SELECT * FROM products WHERE id = ?";

		return $this->db->query($query)->result_array();
	}

}
//  end of Model