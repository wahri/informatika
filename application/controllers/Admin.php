<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            if ($this->session->userdata('role') != 1) {
                redirect('page');
            }
        }
    }

    public function tampilan($tampilan, $data)
    {
        $data['admin'] = $this->db->get_where('admin', ['id' => $this->session->userdata('id')])->row_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/' . $tampilan, $data);
        $this->load->view('admin/template/footer');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $this->tampilan('index', $data);
    }
    public function default()
    {
        $this->load->view('admin/default');
    }

    public function slider()
    {
        $data['slider'] = $this->db->get('slider')->result_array();
        $data['judul'] = "Fitur Slider";
        $this->tampilan('slider', $data);
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
            $this->tampilan('tambahslider', $data);
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
                $this->tampilan('tambahslider', $data);
            }
        }
    }

    public function deleteSlider($id)
    {
        $slider = $this->db->get_where('slider', ['id_slider' => $id])->row_array();
        $link = "./assets/images/slider/";
        unlink($link . $slider['gambar']);
        $this->db->delete('slider', ['id_slider' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Slider dihapus!</div>');
        redirect('admin/slider');
    }

    public function tambahUser()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $data['admin'] = $this->db->get('admin')->result_array();
            $data['judul'] = "Tambah User";
            $this->tampilan('tambahuser', $data);
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
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('paragraf', 'Paragraf', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['profil'] = $this->db->get('profil')->row_array();
            $data['judul'] = "Edit Profil";
            $this->tampilan('editprofil', $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'paragraf' => $this->input->post('paragraf')
            ];
            $this->db->update('profil', $data, ['id_profil' => $this->input->post('id_profil')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengedit profil!</div>');
            redirect('admin/editprofil');
        }
    }

    public function hapusGambarProfil()
    {
        $profil = $this->db->get('profil')->row_array();
        $link = "./assets/images/";
        $data['gambar'] = NULL;
        unlink($link . $profil['gambar']);
        $this->db->update('profil', $data, ['id_profil' => $profil['id_profil']]);
        redirect('admin/editprofil');
    }

    public function uploadGambarProfil()
    {
        $profil = $this->db->get('profil')->row_array();
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = 'profil';

        $this->load->library('upload', $config, 'gambar');
        $this->gambar->initialize($config);

        if ($this->gambar->do_upload('gambar')) {
            $data['gambar'] = $this->gambar->data('file_name');
            $this->db->update('profil', $data, ['id_profil' => $profil['id_profil']]);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengupload gambar!</div>');
            redirect('admin/editprofil');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger mt-4" role="alert">Gagal mengupload gambar!</div>');
            redirect('admin/editprofil');
        }
    }

    public function menu()
    {
        $this->form_validation->set_rules('urutan', 'Urutan', 'required');
        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->db->from('menu');
            $this->db->order_by('urutan', 'asc');
            $data['menu'] = $this->db->get()->result_array();
            $data['judul'] = "Tambah Menu";
            $this->tampilan('menu', $data);
        } else {
            $data = [
                'urutan' => $this->input->post('urutan'),
                'menu' => $this->input->post('menu'),
                'link' => $this->input->post('link')
            ];
            $this->db->insert('menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil Menambahkan Menu!</div>');
            redirect('admin/menu');
        }
    }

    public function submenu()
    {
        $this->form_validation->set_rules('submenu', 'submenu', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['menu'] = $this->db->get('menu')->result_array();
            $data['submenu'] = $this->db->get('submenu')->result_array();
            $data['judul'] = "Tambah submenu";
            $this->tampilan('submenu', $data);
        } else {
            $data = [
                'id_menu' => $this->input->post('id_menu'),
                'submenu' => $this->input->post('submenu'),
                'link' => $this->input->post('link')
            ];
            $this->db->insert('submenu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil Menambahkan submenu!</div>');
            redirect('admin/submenu');
        }
    }

    public function berita()
    {
        $data['judul'] = "Berita";
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['berita'] = $this->db->get('berita')->result_array();
        $this->tampilan('berita', $data);
    }

    public function tambahBerita()
    {
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'required|trim');

        $config['upload_path'] = './assets/images/berita/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = 'berita';

        $this->load->library('upload', $config, 'gambar');
        $this->gambar->initialize($config);

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = '';
            $data['judul'] = "Berita";
            $this->tampilan('tambahberita', $data);
        } else {
            if ($this->gambar->do_upload('gambar')) {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'gambar' => $this->gambar->data('file_name')
                ];

                $this->db->insert('berita', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengupload Berita!</div>');
                redirect('admin/berita');
            } else {
                $data['error'] = $this->gambar->display_errors();
                $data['judul'] = "Berita";
                $this->tampilan('tambahberita', $data);
            }
        }
    }

    public function kategoriBerita($id)
    {
        $data['id_berita'] = $id;
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['judul'] = "Berita";
        $this->tampilan('kategoriberita', $data);
    }

    public function tambahKategori()
    {
        $data['nama_kategori'] = $this->input->post('nama_kategori');
        $this->db->insert('kategori', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil menambah kategori!</div>');
        redirect('admin/berita');
    }

    public function tambahKategoriBerita()
    {
        $id_berita = $this->input->post('id_berita');
        $kategori = $this->input->post('kategori');

        $this->db->delete('rel_kategori_berita', ['id_berita' => $id_berita]);
        foreach ($kategori as $k) {
            $data = [
                'id_berita' => $id_berita,
                'id_kategori' => $k
            ];
            $this->db->insert('rel_kategori_berita', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil menambah kategori berita!</div>');
        redirect('admin/berita');
    }

    public function deleteKategoriBerita($id)
    {
        $this->db->delete('rel_kategori_berita', ['id_kategori' => $id]);
        $this->db->delete('kategori', ['id_kategori' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil menghapus kategori!</div>');
        redirect('admin/berita');
    }

    public function editBerita($id, $gambar = '')
    {
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'required|trim');

        $config['upload_path'] = './assets/images/berita/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = 'berita';

        $this->load->library('upload', $config, 'gambar');
        $this->gambar->initialize($config);

        $berita = $this->db->get_where('berita', ['id_berita' => $id])->row_array();
        // $cek_gambar = $this->input->post('cek');
        if ($this->form_validation->run() == FALSE) {
            $data['ubahgambar'] = $gambar;
            $data['berita'] = $berita;
            $data['error'] = '';
            $data['judul'] = "Berita";
            $this->tampilan('editberita', $data);
        } else {
            if($gambar){
                if ($this->gambar->do_upload('gambar')) {
                    $link = "./assets/images/berita/";
                    unlink($link . $berita['gambar']);

                    $data = [
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi'),
                        'gambar' => $this->gambar->data('file_name')
                    ];
    
                    $this->db->update('berita', $data, ['id_berita' => $id]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengedit Berita!</div>');
                    redirect('admin/berita');
                } else {
                    $data['error'] = $this->gambar->display_errors();
                    $data['ubahgambar'] = $gambar;
                    $data['berita'] = $this->db->get_where('berita', ['id_berita' => $id])->row_array();
                    $data['judul'] = "Berita";
                    $this->tampilan('editberita', $data);
                }
            }else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi')
                ];

                $this->db->update('berita', $data, ['id_berita' => $id]);
                $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengedit Berita!</div>');
                redirect('admin/berita');
            }
        }
    }

    public function deleteBerita($id)
    {
        $berita = $this->db->get_where('berita', ['id_berita' => $id])->row_array();
        $link = "./assets/images/berita/";
        unlink($link . $berita['gambar']);
        $this->db->delete('berita', ['id_berita' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil menghapus berita!</div>');
        redirect('admin/berita');
    }
}
