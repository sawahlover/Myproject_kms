<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends App_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    

    public function index()
    {
        set_label("Dashboard");
        $this->template('view_dashboard');
    }

}

/* End of file Dashboard.php */
