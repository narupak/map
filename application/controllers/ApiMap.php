<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ApiMap extends CI_Controller {
	///////////// หน้าเริ่มต้นของเว็บ////////////////////////////////////////
	public function index()
	{
		$this->load->model('mapApi/M_location','ML');
		$data['place'] = $this->ML->query_place();
		$data['detail_place'] = $this->ML->query_detail_place();
		$this->load->view('apimap/v_main',$data);
	}
	//////////////////////////////////////
	
	/////////////////ส่งที่นำข้อมูลตำแหน่งของสถานที่จากdatabase มาใช้งาน ////////////////////////////////
	public function getMapLocation(){
		$this->load->model('mapApi/M_location','ML');
		$data['location'] = $this->ML->query_location()->result_array();
		echo json_encode($data);
	}
	///////////////////////////////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้า home ////////////////////////////
	public function getHomeDetail(){
		$this->load->view('apimap/detail/v_home_detail');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้า home ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้า โรงเรียนกาสรกสิวิทย์ ////////////////////////////
	public function getKasivitDetail(){
		$this->load->view('apimap/detail/v_kasivit');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้า โรงเรียนกาสรกสิวิทย์ ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้า คุ้งกระเบน ////////////////////////////
	public function getKungKaBane(){
		$this->load->view('apimap/detail/v_kungkabane');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้า คุ้งกระเบน ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้า ภักดีรัมไพ ////////////////////////////
	public function getPakDeeRumPai(){
		$this->load->view('apimap/detail/v_pakdeerumpai');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้า ภักดีรัมไพ ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าไม้ผล ////////////////////////////
	public function getMaiPol(){
		$this->load->view('apimap/detail/v_maipol');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าไม้ผล ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าห้วยโสมง ////////////////////////////
	public function getHuaiSaMong(){
		$this->load->view('apimap/detail/v_huaisamong');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าห้วยโสมง ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าหินซ้อน ////////////////////////////
	public function getHinSont(){
		$this->load->view('apimap/detail/v_hinsont');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าหินซ้อน ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าพัฒนา ////////////////////////////
	public function getPattana(){
		$this->load->view('apimap/detail/v_pattana');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าพัฒนา ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าสองน้ำ ////////////////////////////
	public function getSongNam(){
		$this->load->view('apimap/detail/v_songnam');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าสองน้ำ ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าสิริเตริญวรรษ ////////////////////////////
	public function getSiriChaloengWat(){
		$this->load->view('apimap/detail/v_sirichaloengwat');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าสิริเตริญวรรษ ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าอนุรักษ์ ////////////////////////////
	public function getAnuRak(){
		$this->load->view('apimap/detail/v_anurak');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าอนุรักษ์ ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าป่าชายเลน////////////////////////////
	public function getPaChaiLane(){
		$this->load->view('apimap/detail/v_pachailane');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าป่าชายเลน////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าเต่าทะเล////////////////////////////
	public function getTaoTaLay(){
		$this->load->view('apimap/detail/v_taotalay');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าเต่าทะเล////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าเขาระกำ////////////////////////////
	public function getKaoRaGum(){
		$this->load->view('apimap/detail/v_kaoragum');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าเขาระกำ////////////////////////////
	
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าทุ่งโปร่งทอง////////////////////////////
	public function getTungProngThong(){
		$this->load->view('apimap/detail/v_tungprongthong');
	}
	/////////////ส่วนที่เก็บข้อมูลiframe หน้าทุ่งโปร่งทอง////////////////////////////
	
	
	
}
