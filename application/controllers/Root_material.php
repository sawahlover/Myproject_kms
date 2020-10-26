<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Root_Material extends CI_Controller
{
    public function index()
    {

        $this->load->view('template_dash/header_das');
        $this->load->view('dashboard_user/v_input_material');
        $this->load->view('template_dash/footer_das');
    }
    public function action()
    {
        ini_set('upload_max_filesize', '500M');
        ini_set('post_max_size', '800M');
        $config['upload_path']          = './videos/';
        $config['allowed_types']        = '*';
        $config['allowed_size']        = '20M';
        $config['max_size']        = 200000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('content')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $url = site_url('videos/' . $this->upload->data('file_name'));
            $title = $this->input->post('title');
            $deskripsi = $this->input->post('deskripsi');
            $view = $this->input->post('view');
            $data = array(
                'title'               => $title,
                'deskripsi'           => $deskripsi,
                'view'             => $view,
                'file_up'           => $url,

            );
            $this->M_material->input_data($data, 'tb_reading');
            redirect('user/index');
        }
    }
    public function view_insert()
    {
        $data['row'] = $this->M_material->tampil()->result();
        $this->load->view('template_dash/header_das');
        $this->load->view('dashboard_user/v_data_material', $data);
        $this->load->view('template_dash/footer_das');
    }
}
