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
        $data['judul'] = "Dashboard";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/footer');
    }
    public function
    default()
    {
        $this->load->view('admin/default');
    }

    public function slider()
    {
        $data['slider'] = $this->db->get('slider')->result_array();
        $data['judul'] = "Fitur Slider";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/slider', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambahSlider()
    {
        $config['upload_path'] = './assets/images/slider/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Slider - ' . $this->input->post('judul');

        $this->load->library('upload', $config, 'gambarSlider');
        $this->gambarSlider->initialize($config);

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = $this->gambarSlider->display_errors();
            $data['judul'] = "Tambah Slider";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/tambahslider', $data);
            $this->load->view('admin/template/footer');
        } else {
            if ($this->gambarSlider->do_upload('gambar')) {
                $data = [
                    'gambar' => $this->gambarSlider->data('file_name'),
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul')
                ];
                $this->db->insert('slider', $data);
                redirect('admin/slider');
            } else {
                $data['error'] = $this->gambarSlider->display_errors();
                $data['judul'] = "Tambah Slider";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/topbar');
                $this->load->view('admin/template/sidebar');
                $this->load->view('admin/tambahslider', $data);
                $this->load->view('admin/template/footer');
            }
        }
    }

    public function tambahUser()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $data['admin'] = $this->db->get('admin')->result_array();
            $data['judul'] = "Tambah User";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/tambahuser', $data);
            $this->load->view('admin/template/footer');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => $this->input->post('role')
            ];
            $this->db->insert('admin', $data);
            redirect('admin/tambahuser');
        }
    }

    public function deleteUser($id)
    {
        $this->db->delete('admin', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User dihapus!</div>');
        redirect('admin/tambahuser');
    }

    public function editProfil()
    {
        $data['admin'] = $this->db->get('admin')->result_array();
        $data['judul'] = "Tambah User";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/tambahuser', $data);
        $this->load->view('admin/template/footer');
    }
}
