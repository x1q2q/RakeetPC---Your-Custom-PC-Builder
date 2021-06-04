<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
    parent::__construct();
  }
  public function index(){
    $data = array(
      'template'		=> 'admin/pages/dashboard',
      'for'					=> 'dashboard',
      'titlebread'	=> 'Dashboard',
      'contentbread'=> array('ni-tv-2','Dashboards','default')
      );
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/sidebar',$data);
			$this->load->view('admin/template/content',$data);
  }
  public function error(){

  }
}
