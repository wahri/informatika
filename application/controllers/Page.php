<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function index()
    {
        $data['prodi'] = $this->db->get('pojok_prodi')->row_array();
        $data['instagram'] = $this->db->get('instagram')->result_array();
        $data['page'] = $this->db->get('page')->result_array();
        $data['akademik'] = $this->db->get_where('page', ['kategori' => 'akademik'])->result_array();
        $data['judul'] = "Home";
        $data['link'] = "Home";
        $this->db->order_by('datetime', 'DESC');
        $this->db->limit(4);
        $data['berita'] = $this->db->get('berita')->result_array();
        $this->load->view('home', $data);
    }

    public function detail($id)
    {
        $data['link'] = "Home";
        $data['page'] = $this->db->get_where('page', ['id_page' => $id])->row_array();
        $this->load->view('detail', $data);
    }

    public function visiMisi()
    {
        $data['judul'] = "Visi dan Misi";
        $data['link'] = "Profil";
        $this->load->view('page/visimisi', $data);
    }

    public function beritaTIF()
    {
        $this->db->order_by('datetime', 'DESC');
        $this->db->limit(8);
        $data['berita'] = $this->db->get('berita')->result_array();
        $data['judul'] = "Berita TIF";
        $data['link'] = "Berita TIF";
        $this->load->view('page/beritatif', $data);
    }

    public function berita($id)
    {
        $data['berita'] = $this->db->get_where('berita', ['id_berita' => $id])->row_array();
        $data['judul'] = "Berita TIF";
        $data['link'] = "Berita TIF";
        $this->load->view('page/berita', $data);
    }

    public function dosen()
    {
        $data['judul'] = "Dosen Teknik Informatika";
        $data['link'] = "Profil";
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $this->load->view('page/dosen', $data);
    }

    public function infoKPTA()
    {
        $data['judul'] = "Dosen Teknik Informatika";
        $data['link'] = "Profil";
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $this->load->view('page/infoKPTA', $data);
    }
}
