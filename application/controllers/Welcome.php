<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	 public function index() {

		 if ($this->session->loginuser == TRUE) { /// logged in
		 	$data['title']='Logged in!';
			$data['username']=$this->session->username;
			$data['badges']=6;
			$data['badges']=$this->login_model->badges($this->session->username);
		 	$this->load->view('template/header', $data);
		 	$this->load->view('template/objective', $data);
		 	$this->load->view('template/footer', $data);
	 	} else { //not logged in
			$data['title']='Not logged in';
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">You must be logged in to view welcome page.</div>');
			$this->load->view('template/header');
			$this->load->view('login_view');
			$this->load->view('template/footer');
		}


	}

}
