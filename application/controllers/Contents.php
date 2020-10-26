<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends App_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_contents','content');
    }
    

    public function upload($tag=null,$id=null)
    {
        set_label("Upload ".$tag);
        add_js([
            'vendors/general/jPlayer/dist/jplayer/jquery.jplayer.min.js',
            'custom/js/contents/upload_vidio.js'
        ]);
        add_css([
            'vendors/general/jPlayer/dist/skin/blue.monday/css/jplayer.blue.monday.min.css'
        ]);
        if($id!=null){
            $data['row']=$this->content->findOne($id)->row_array();
            $this->template('contents/view_upload_'.$tag,$data);
        }else{
            $this->template('contents/view_upload_'.$tag);
        }
    }   

    function simpan(){
        if($this->input->is_ajax_request()){
            if($this->content->simpan() == TRUE){
                $this->response=[
                    'success'=>true,
                    'message'=>'Failed try to save, try again.',
                    'id'=>$this->db->insert_id()
                ];
            }else{
                $this->response=[
                    'success'=>false,
                    'message'=>'Failed try to save, try again.'
                ];
            }
            echo json_encode($this->response);
        }else{
            exit("No direct scripts access allowed.");
        }
    }

    function data($tag=null){
        set_label("Database ".$tag);
        $this->template('contents/view_data_'.$tag);
    }

}

/* End of file Contents.php */
