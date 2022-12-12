<?php
defined('BASEPATH') or exit('No direct script access allowed');

class chatting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_chatting');
    }
    public function index()
    {
        $querychat = $this->M_chatting->getchat();
        $data = array(
            'chat' => $querychat
        );
        $this->load->view('View HTML/chat', $data);
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'message' => $this->input->post('message')
        );

        $this->db->insert('chat', $data);
    }
}
