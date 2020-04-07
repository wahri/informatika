<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            if ($this->session->userdata('role') != 1) {
                redirect('home');
            }
        }
    }
    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/template/footer');
    }
    public function default()
    {
        $this->load->view('admin/default');
    }
}
