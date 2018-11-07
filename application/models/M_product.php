<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {
	public function query_dropdown(){
		$sql = "SELECT * FROM trainexam.category";
		return $this->db->query($sql);
	}
	function get_all_category(){
		$sql = "SELECT * FROM trainexam.product 
					LEFT JOIN trainexam.category 
						ON product.category_code = category.category_code";
		return $this->db->query($sql);
	}
	function get_header_categoty(){
		$sql = "SELECT * FROM trainexam.product 
					LEFT JOIN trainexam.category 
						ON product.category_code = category.category_code  
							GROUP BY category.category_code";
		return $this->db->query($sql);
	}
}