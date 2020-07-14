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
        //pagination config
        $config['base_url'] = 'http://informatika.umri.ac.id/page/beritatif';
        // $config['total_rows'] = $this->berita->countBerita();
        $config['total_rows'] = $this->db->get('berita')->num_rows();
        $config['per_page'] = 8;


        //custom pagination
        $config['full_tag_open'] = '<div class="pagination_bar"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></div>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item"> <a class="page-link active">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);
        //end custom pagination

        // $cari = $this->input->get('cari');
        // $kategori = $this->input->get('kategori');
        $data['start'] = $this->uri->segment(3);
        $this->db->order_by('datetime', 'DESC');
        // $this->db->like('judul', $cari);
        // $this->db->like('kategori', $cari);
        $berita = $this->db->get('berita', $config['per_page'], $data['start'])->result_array();
        $data['berita'] = $berita;

        // $data['cari'] = $cari;
        $data['navbar'] = "Berita";

        // $this->db->order_by('datetime', 'DESC');
        // $this->db->limit(8);
        // $data['berita'] = $this->db->get('berita')->result_array();
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
