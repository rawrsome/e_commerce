<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coffee extends CI_Model {

	public function get_all_products()
	{
		$query = "SELECT * FROM products";

		return $this->db->query($query)->result_array();
	}


}
//  end of Model