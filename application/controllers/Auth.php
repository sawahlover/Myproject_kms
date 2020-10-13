<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Pasword', 'required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Sign_Up page';
            $this->load->view('template_auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('template_auth/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        //user ada
        if ($user) {
            //jika user aktiv
            if ($user['active'] == 1) {

                //cek pasword
                if (password_verify($password, $user['password'])) {
                    $rolename = '';
                    if ($user['role_id'] == 2) {
                        $rolename = 'root';
                    } else if ($user['role_id'] == 3) {
                        $rolename = 'user';
                    }


                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'name' => $user['name'],
                        'rolename' => $rolename

                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                    //echo 'berhasil login';
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert 
                alert-danger" role="alert">PAssword salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert 
                alert-danger" role="alert">Email belum terdaftar</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert 
            alert-danger" role="alert">Email belum terdaftar</div>');
            redirect('auth');
        }
    }




    public function registrasi()
    {

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|matches[password2]',
            [
                'matches' => 'password dont match!',
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Sign_Up page';
            $this->load->view('template_auth/header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('template_auth/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 3,
                'active' => 1,
                'create' => time()
            ];
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success fade show" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text">Berhasil disimpan!</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="la la-close"></i></span>
                </button>
            </div>
        </div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        you have successfully logged out!
          </div>');
        redirect('auth');
    }
}
