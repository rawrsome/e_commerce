<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function get_all_products_w_imgs()
	{
		$query = "SELECT * FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE images.img_status='main'";

		return $this->db->query($query)->result_array();
	}

	public function get_imgs_for_product($id){
		$query="SELECT * FROM images
				WHERE product_id=?";

		return $this->db->query($query,array($id))->row_array();
	}

	public function get_similar($category){
		$query="SELECT * FROM products
				LEFT JOIN images
				ON products.id=images.product_id
				WHERE actegory_id=?
				ORDER BY RAND()
				LIMIT 3";
		return $this->db->query($query,array($category))->result_array();
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

	public function get_search($name)
	{

		$name='%'.$name.'%';
		$query = "SELECT * FROM products WHERE name LIKE ?";

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