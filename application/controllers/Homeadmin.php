<?php

class homeadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $this->load->view('V_homeadmin');
    }
}
