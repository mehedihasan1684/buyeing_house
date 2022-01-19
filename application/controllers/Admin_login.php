<?php
class Admin_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Admin_m');
    }
    public function index()
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            redirect(base_url('Admin_login/dashboard'), 'refresh');
        } else {
            $this->load->view('admin/login');
        }
    }
    public function login()
    {
        $data = $this->input->post();
        $admin = $this->Admin_m->login($data);
        if (!empty($admin)) {
            $this->session->set_userdata('username', $admin->username);
            redirect(base_url('Admin_login/dashboard'), 'refresh');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function dashboard()
    {
        $username = $this->session->userdata('username');
        if (isset($username)) {
            $data['username'] = $username;
            $data['page'] = 'General';

            $this->load->view('admin/admin_head');
            $this->load->view('admin/admin_side', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('admin/admin_foot');
        } else {
            redirect(base_url('Admin_login'), 'refresh');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url('Admin_login'), 'refresh');
    }
}

?>