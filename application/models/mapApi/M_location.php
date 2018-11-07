<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_location extends CI_Model {
	public function query_location(){
		$sql = "SELECT * FROM maptravel.location_map";
		return $this->db->query($sql);
	}
	public function query_place(){
		$sql = "SELECt * FROM maptravel.travel_place";
		return $this->db->query($sql);
	}
	public function query_detail_place(){
		$sql = "SELECT * FROM maptravel.detail_place";
		return $this->db->query($sql);
	}
}
?>