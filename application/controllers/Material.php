<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Material extends CI_Controller
{
    public function index()
    {
        $data['row'] = $this->M_material->tampil()->result();
        $this->load->view('template_dash/header_das');
        $this->load->view('dashboard_user/v_materialuser', $data);
        $this->load->view('template_dash/footer_das');
    }
}
