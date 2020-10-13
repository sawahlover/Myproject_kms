<?php
class M_root extends CI_Model
{
    public function tampil()
    {
        return $this->db->get('tb_root');
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
