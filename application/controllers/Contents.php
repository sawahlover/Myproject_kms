<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends App_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    

    public function upload($tag=null)
    {
        $this->template('contents/view_upload_'.$tag);
    }   

}

/* End of file Contents.php */
