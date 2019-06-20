<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function index()
    {
        $this->load->view('theme/header');
        $this->load->view('navegador');
        $this->load->view('principal');
        $this->load->view('theme/footer');
    }
}
