<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class my404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $data['content'] = 'error_404'; // View name
        $this->load->view('template/header.php', $data);
        $this->load->view('404',$data);//loading in my template
        $this->load->view('template/footer.php', $data);
    }
}
?>
