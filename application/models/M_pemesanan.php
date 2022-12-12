<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan extends CI_Model {

    function getData() {
        $query = $this->db->get('konfirmasi');
        return $query->result();
    }
 function insertData($DATA) {
    $this->db->insert('konfirmasi', $DATA);
 }

 function getDetail($id) {
    $this->db->where('id', $id);
    $query = $this->db->get('konfirmasi');
    return $query->row();
 }
    function UpdateDetail($id, $DATA){
        $this->db->where('id', $id);
        $this->db->update('konfirmasi',$DATA);
    }

    function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('konfirmasi');
    }
}