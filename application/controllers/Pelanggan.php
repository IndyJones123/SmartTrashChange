<?php

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelanggan');
    }

    public function index()
    {
        $data['title'] = 'Sampah';
        $data['hosting'] = $this->M_pelanggan->get_pelanggan();
        $this->load->view('V_listpelanggan', $data);
    }

    public function delete_data($id_pelanggan)
    {
        $this->M_pelanggan->delete_pelanggan($id_pelanggan);
        redirect('Pelanggan');
    }
}
