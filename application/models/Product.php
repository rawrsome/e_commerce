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