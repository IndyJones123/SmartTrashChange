<?php

class M_pesanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //get data mahasiswa
    public function get_pesanan()
    {
        $sql = "SELECT * FROM pesanan";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function insert_pesanan()
    {
        $Username = $this->input->post('Username');
        $Alamat = $this->input->post('Alamat');
        $Sampah = $this->input->post('Sampah');
        $BeratSampah = $this->input->post('BeratSampah');


        $data = array(
            'NamaPelanggan' => $Username,
            'AlamatPelanggan' => $Alamat,
            'Sampah' => $Sampah,
            'BeratSampah' => $BeratSampah
        );
        $this->db->insert('pesanan', $data);
    }
}
