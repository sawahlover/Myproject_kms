<?php
class M_dashboard extends CI_Model
{
    public function tampil_video()
    {
        return $this->db->get('tb_root');
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
