<?php

class M_pelanggan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //get data mahasiswa
    public function get_pelanggan()
    {
        $sql = "SELECT * FROM account";
        $data = $this->db->query($sql);
        return $data->result();
    }


    public function delete_pelanggan($id)
    {
        $this->db->delete('hosting', array('id_hosting' => $id));
    }
}
