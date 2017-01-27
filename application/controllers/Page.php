<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

  public function objectives() {
    if ($this->session->loginuser == TRUE) { /// logged in
      $data['title']='My Objectives';
      $data['username']=$this->session->username;
      //$data['badges']=$this->login_model->badges($this->session->username);
      $this->badges_model->checkbadge('objectives');
      $data['badges']=$this->badges_model->badges($this->session->username);
      $this->load->view('template/header', $data);
      $this->load->view('pages/objective', $data);
      $this->load->view('template/goback', $data);
      $this->load->view('template/footer', $data);
    }
    else { // Not logged in
      redirect('index');
    }
  } // End objectives()

  public function education() {
    if ($this->session->loginuser == TRUE) { /// logged in
      $data['title']='Education';
      $data['username']=$this->session->username;
      //$data['badges']=$this->login_model->badges($this->session->username);
      $this->badges_model->checkbadge('education');
      $data['badges']=$this->badges_model->badges($this->session->username);
      $this->load->view('template/header', $data);
      $this->load->view('pages/education', $data);
      $this->load->view('template/goback', $data);
      $this->load->view('template/footer', $data);
    }
    else { // Not logged in
      redirect('index');
    }
  } // End education()

  public function history() {
    if ($this->session->loginuser == TRUE) { /// logged in
      $data['title']='My work history';
      $data['username']=$this->session->username;
      //$data['badges']=$this->login_model->badges($this->session->username);
      $this->badges_model->checkbadge('history');
      $data['badges']=$this->badges_model->badges($this->session->username);
      $this->load->view('template/header', $data);
      $this->load->view('pages/history', $data);
      $this->load->view('template/goback', $data);
      $this->load->view('template/footer', $data);
    }
    else { // Not logged in
      redirect('index');
    }
  } // End history()

  public function skills() {
    if ($this->session->loginuser == TRUE) { /// logged in
      $data['title']='My Skills';
      $data['username']=$this->session->username;
      //$data['badges']=$this->login_model->badges($this->session->username);
      $this->badges_model->checkbadge('skills');
      $data['badges']=$this->badges_model->badges($this->session->username);
      $this->load->view('template/header', $data);
      $this->load->view('pages/skills', $data);
      $this->load->view('template/goback', $data);
      $this->load->view('template/footer', $data);
    }
    else { // Not logged in
      redirect('index');
    }
  } // End skills()

  public function certifications() {
    if ($this->session->loginuser == TRUE) { /// logged in
      $data['title']='My Certifications';
      $data['username']=$this->session->username;
      //$data['badges']=$this->login_model->badges($this->session->username);
      $this->badges_model->checkbadge('certifications');
      $data['badges']=$this->badges_model->badges($this->session->username);
      $this->load->view('template/header', $data);
      $this->load->view('pages/certifications', $data);
      $this->load->view('template/goback', $data);
      $this->load->view('template/footer', $data);
    }
    else { // Not logged in
      redirect('index');
    }
  } // End certifications()

}
