<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{
    public function index()
    {
        $data['row'] = $this->M_dashboard->tampil_video()->result();
        $this->load->view('template_dash/header_das');
        $this->load->view('dashboard_user/v_comuniti', $data);
        $this->load->view('template_dash/footer_das');
    }
}
