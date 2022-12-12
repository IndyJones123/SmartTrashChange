<?php

class M_chatting extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getchat()
    {
        $query = $this->db->get('chat');
        return $query->result();
    }
    public function insertchat($data)
    {
        $this->db->insert('chat', $data);
    }
}
