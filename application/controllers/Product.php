<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->model('M_product','MP');
		$data['datas'] = $this->MP->get_all_category();
		$data['header_cate'] = $this->MP->get_header_categoty();
		$this->load->view('v_product',$data);
	} 
	public function query()
	{
		$this->load->model('M_product','MP');
		$data['dropdown'] = $this->MP->query_dropdown()->result_array();
		//echo $this->MP->db->last_query();
		
		echo json_encode($data);
	}
}
