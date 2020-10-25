<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('is_login')==false){
            redirect(site_url('auth'),'refresh');
        }
    }

    function template($content=null,$data=null){
        $this->load->view('template/header_3.php', $data);
        $this->load->view($content, $data);
        $this->load->view('template/footer_3.php', $data);
    }
    

}

/* End of file App.php */
