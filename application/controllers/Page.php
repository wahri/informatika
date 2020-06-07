<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['link'] = "Home";
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(5);
        $data['berita'] = $this->db->get('berita')->result_array();
        $this->load->view('home', $data);
    }

    public function visiMisi()
    {
        $data['judul'] = "Visi dan Misi";
        $data['link'] = "Profil";
        $this->load->view('visimisi', $data);
    }
}