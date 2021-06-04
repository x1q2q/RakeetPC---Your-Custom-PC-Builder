<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
    parent::__construct();
  }
  public function index(){
		$data = array(
      'for'			=> 'home',
      'title'		=> 'RakeetPC - Home Page Landing',
      );
    $this->load->view('template/navbar',$data);
    $this->load->view('pages/landing',$data);
    $this->load->view('template/footer',$data);
  }
  public function error(){

  }
}
