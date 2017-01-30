<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	     {
	          parent::__construct();
	     }

public function index() {
	if ($this->session->loginuser == TRUE) { /// logged in
	 $data['title']='Home - Welcome ' . $this->session->username;
	 $data['username']=$this->session->username;
	 $data['badges']=5;
	 $data['badges']=$this->badges_model->badges($this->session->username);
	 $this->load->view('template/header', $data);
	 $this->load->view('template/home', $data);
	 $this->load->view('template/footer', $data);
 } else { //not logged in
	 $data['title']='Login';
	 $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">You must be logged in to view this page.</div>');
	 $this->load->view('template/header');
	 $this->load->view('pages/login_view');
	 $this->load->view('template/footer');
 }
}

	public function test() {
		$data['title']='test';
		$this->load->library('email');

		$this->email->from('test@kevinbisneau.com', 'KevinBisneau.com');
		$this->email->to('anticide@gmail.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();
		$this->load->view('template/test', $data);
	}
	public function logout() {
		$this->session->sess_destroy();
		$data['title']='Login';
		$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">You are now logged out.</div>');
		$this->load->view('template/header');
		$this->load->view('pages/login_view');
		$this->load->view('template/footer');

	}

	public function resume() {
		if ($this->session->loginuser == TRUE) { /// logged in
		 $data['title']='My web resume - Kevin Bisneau';
		 $data['username']=$this->session->username;
		 $data['badges']=$this->badges_model->badges($this->session->username);
		 $this->load->view('template/header', $data);
		 $this->load->view('pages/pages', $data);
		 $this->load->view('template/footer', $data);
	 } else { //not logged in
		 $data['title']='Login';
		 $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">You must be logged in to view this page.</div>');
		 $this->load->view('template/header');
		 $this->load->view('pages/login_view');
		 $this->load->view('template/footer');
	 }
	}

}
