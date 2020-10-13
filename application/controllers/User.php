<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function index()
    {
        $this->load->view('template_dash/header_das');
        if ($this->session->userdata('role_id') == '2') {
            $this->load->view('auth/vd_root');
            
        } else if ($this->session->userdata('role_id') == '3') {

            $this->load->view('auth/userv');
        }
        $this->load->view('template_dash/footer_das');
        //echo 'selamat datang  ' . $this->session->userdata('name') . ' Sekarang kamu berada pada role ' . $this->session->userdata('role_id') . 'nama rolenya adalah' . $this->session->userdata('rolename');
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
            $namavid = $this->input->post('namavid');
            $data = array(
                'title'               => $title,
                'deskripsi'           => $deskripsi,
                'namavid'             => $url,

            );
            $this->M_root->input_data($data, 'tb_root');
            redirect('user/index');
        }
    }
    public function detail($id)
    {
        $this->load->model('M_root');
        $detail = $this->M_root->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('template_dash/header_das');
        $this->load->view('auth/detail');
        $this->load->view('template_dash/footer_das');
    }
    public function coba()
    {
        $this->load->view('auth/coba');
    }
    public function do_upload()
    {
        //var_dump($_FILES['content']);
        $config['upload_path']          = './videos/';
        $config['allowed_types']        = '*';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('content')) {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $url = site_url('videos/' . $this->upload->data('file_name'));
            echo 'linknya adalah ' . $url;
        }
    }
    public function insert_video()
    {
        $data['row'] = $this->M_root->tampil()->result();
        $this->load->view('template_dash/header_das');
        $this->load->view('auth/root', $data);
        $this->load->view('template_dash/footer_das');
    }
}
