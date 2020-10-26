<?php
class M_material extends CI_Model
{
    public function tampil()
    {
        return $this->db->get('tb_reading');
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
