<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	     {
	          parent::__construct();
	     }

public function index() {
	if ($this->session->loginuser == TRUE) { /// logged in
	 $data['title']='Logged in!';
	 $data['username']=$this->session->username;
	 $data['badges']=6;
	 $data['badges']=$this->badges_model->badges($this->session->username);
	 $this->load->view('template/header', $data);
	 $this->load->view('template/home', $data);
	 $this->load->view('template/footer', $data);
 } else { //not logged in
	 $data['title']='Not logged in';
	 $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">You must be logged in to view this page.</div>');
	 $this->load->view('template/header');
	 $this->load->view('login_view');
	 $this->load->view('template/footer');
 }
}

	public function test() {
		$data['title']='test';
		$this->load->view('template/test', $data);
	}
	public function logout() {
		$this->session->sess_destroy();
		$data['title']='KevinBisneau.com - Logged out';
		$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">You are now logged out.</div>');
		$this->load->view('template/header');
		$this->load->view('pages/login_view');
		$this->load->view('template/footer');

	}

	public function resume() {
		if ($this->session->loginuser == TRUE) { /// logged in
		 $data['title']='Logged in!';
		 $data['username']=$this->session->username;
		 $data['badges']=6;
		 $data['badges']=$this->badges_model->badges($this->session->username);
		 $this->load->view('template/header', $data);
		 $this->load->view('pages/resume', $data);
		 $this->load->view('template/footer', $data);
	 } else { //not logged in
		 $data['title']='Not logged in';
		 $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">You must be logged in to view this page.</div>');
		 $this->load->view('template/header');
		 $this->load->view('pages/login_view');
		 $this->load->view('template/footer');
	 }
	}

}
