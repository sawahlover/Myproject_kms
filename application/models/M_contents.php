<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_contents extends CI_Model {

    function simpan(){
        $data=[
            'title'=>$this->input->post('title'),
            'deskripsi'=>$this->input->post('description'),
            'url_contents'=>$this->input->post('url'),
            'id_category'=>$this->input->post('category'),
            'jenis'=>$this->input->post('jenis')
        ];
        if($this->input->post('id')!=''){
            $this->db->where('id',$this->input->post('id'));
            return
            $this->db->update('tb_contents',$data);
        }else{
            return
            $this->db->insert('tb_contents',$data);
        }
        
    }

    function findOne($id=null){
        return 
        $this->db->get_where('tb_contents',[
            'id'=>$id
        ]);
    }

}

/* End of file M_contents.php */
