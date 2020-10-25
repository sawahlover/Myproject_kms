<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->session->sess_destroy();
        redirect(site_url(),'refresh');
    }
    

    public function index()
    {
        
    }

}

/* End of file Logout.php */
