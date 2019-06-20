<?php

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logueado')) {
            redirect(base_url()."pages/login");
			
        }
    }

    public function dashboard()
    {

        $this->load->view('Main/header');
        $this->load->view('dhb_nav');
        $this->load->view('Home_login');
        $this->load->view('Main/footer');


    }
}
