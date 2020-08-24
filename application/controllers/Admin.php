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
    
    public function setting()
    {
        $data = [
            'title' => $this->db->get_where('website', ['setting' => 'title'])->row_array(),
            'desc' => $this->db->get_where('website', ['setting' => 'desc'])->row_array(),
            'copyright' => $this->db->get_where('website', ['setting' => 'copyright'])->row_array(),
            'company' => $this->db->get_where('website', ['setting' => 'company'])->row_array(),
            'address' => $this->db->get_where('website', ['setting' => 'address'])->row_array(),
            'contact' => $this->db->get_where('website', ['setting' => 'contact'])->row_array(),
            'logo' => $this->db->get_where('website', ['setting' => 'logo'])->row_array()
        ];

        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';

        $this->load->library('upload', $config, 'logo');
        $this->logo->initialize($config);

        $data['judul'] = "Setting Website";
        $this->tampilan('setting', $data);

        $this->form_validation->set_rules('link', 'Link', 'trim');

        if ($this->form_validation->run() == TRUE) {
            // $this->db->update('website', ['value' => $this->input->post('title')], ['setting' => 'title']);
            // $this->db->update('website', ['value' => $this->input->post('desc')], ['setting' => 'desc']);
            // $this->db->update('website', ['value' => $this->input->post('copyright')], ['setting' => 'copyright']);
            // $this->db->update('website', ['value' => $this->input->post('company')], ['setting' => 'company']);
            // $this->db->update('website', ['value' => $this->input->post('address')], ['setting' => 'address']);
            // $this->db->update('website', ['value' => $this->input->post('contact')], ['setting' => 'contact']);

            if($this->logo->do_upload('logo')){
                echo "berhasil";
                die;
            }else{
                echo "gagal";
                die;
            }
        }

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
        $config['file_name'] = 'Slider-';

        $this->load->library('upload', $config, 'gambarSlider');
        $this->gambarSlider->initialize($config);

        $this->form_validation->set_rules('link', 'Link', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = $this->gambarSlider->display_errors();
            $data['judul'] = "Tambah Slider";
            $this->tampilan('tambahslider', $data);
        } else {
            if ($this->gambarSlider->do_upload('gambar')) {
                $data = [
                    'gambar' => $this->gambarSlider->data('file_name'),
                    'link' => $this->input->post('link')
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

    public function editSlider($id, $ubahgambar = 0)
    {
        $config['upload_path'] = './assets/images/slider/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Slider-';

        $data['ubahgambar'] = $ubahgambar;
        $data['slider'] = $this->db->get_where('slider', ['id_slider' => $id])->row_array();

        $this->load->library('upload', $config, 'gambarSlider');
        $this->gambarSlider->initialize($config);

        $this->form_validation->set_rules('link', 'Link', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = $this->gambarSlider->display_errors();
            $data['judul'] = "Edit Slider";
            $this->tampilan('editslider', $data);
        } else {
            if ($ubahgambar == 1) {
                if ($this->gambarSlider->do_upload('gambar')) {
                    $dataa = [
                        'gambar' => $this->gambarSlider->data('file_name'),
                        'link' => $this->input->post('link')
                    ];
                    $this->db->update('slider', $dataa, ['id_slider' => $id]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah slider!</div>');
                    redirect('admin/slider');
                } else {
                    $data['error'] = $this->gambarSlider->display_errors();
                    $data['judul'] = "Edit Slider";
                    $this->tampilan('editslider', $data);
                }
            } else if ($ubahgambar == 0) {
                $dataa['link'] = $this->input->post('link');
                $this->db->update('slider', $dataa, ['id_slider' => $id]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah slider!</div>');
                redirect('admin/slider');
            } else {
                echo "something is wrong!";
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
        $this->form_validation->set_rules('urutan', 'Urutan', 'required|is_unique[menu.urutan]');
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

    public function editMenu()
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
            $this->db->update('menu', $data, ['id_menu' => $this->input->post('id_menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil Mengubah Menu!</div>');
            redirect('admin/menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->db->delete('submenu', ['id_menu' => $id]);
        $this->db->delete('menu', ['id_menu' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil menghapus menu!</div>');
        redirect('admin/menu');
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

    public function editSubmenu()
    {
        $this->form_validation->set_rules('submenu', 'submenu', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        $id_submenu = $this->input->post('id_submenu');
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
            $this->db->update('submenu', $data, ['id_submenu' => $id_submenu]);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengubah submenu!</div>');
            redirect('admin/submenu');
        }
    }

    public function deleteSubMenu($id)
    {
        $this->db->delete('submenu', ['id_submenu' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil menghapus submenu!</div>');
        redirect('admin/submenu');
    }

    public function berita()
    {
        $data['judul'] = "News Management";
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
                    'gambar' => $this->gambar->data('file_name'),
                    'datetime' => $this->input->post('date')
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

    public function editBerita($id, $gambar = 0)
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
            if ($gambar == 1) {
                if ($this->gambar->do_upload('gambar')) {
                    $link = "./assets/images/berita/";
                    unlink($link . $berita['gambar']);

                    $data = [
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi'),
                        'gambar' => $this->gambar->data('file_name'),
                        'datetime' => $this->input->post('date')
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
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'datetime' => $this->input->post('date')
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

    public function page()
    {
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['page'] = $this->db->get('page')->result_array();
        $data['judul'] = "Page Management";
        $this->tampilan('page', $data);
    }

    public function tambahPage()
    {
        $this->form_validation->set_rules('judul', 'Judul page', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi page', 'required|trim');

        $config['upload_path'] = './assets/images/page/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = 'page-';

        $this->load->library('upload', $config, 'page');
        $this->page->initialize($config);

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = '';
            $data['judul'] = "page";
            $this->tampilan('tambahpage', $data);
        } else {
            if ($this->page->do_upload('gambar')) {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'kategori' => $this->input->post('kategori'),
                    'gambar' => $this->page->data('file_name')
                ];

                $this->db->insert('page', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengupload page!</div>');
                redirect('admin/page');
            } else {
                // $data['error'] = $this->page->display_errors();
                // $data['judul'] = "page";
                // $this->tampilan('tambahpage', $data);
                $data = [
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'kategori' => $this->input->post('kategori')
                ];

                $this->db->insert('page', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengupload page!</div>');
                redirect('admin/page');
            }
        }
    }

    public function editPage($id, $ubahgambar = 0)
    {
        $this->form_validation->set_rules('judul', 'Judul page', 'trim');
        $this->form_validation->set_rules('isi', 'Isi page', 'trim');
        $cek_gambar = $this->input->post('cek');
        $config['upload_path'] = './assets/images/page/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = 'page-';

        $this->load->library('upload', $config, 'page');
        $this->page->initialize($config);

        $page = $this->db->get_where('page', ['id_page' => $id])->row_array();

        if ($this->form_validation->run() == FALSE) {
            $data['ubahgambar'] = $ubahgambar;
            $data['page'] = $page;
            $data['error'] = '';
            $data['judul'] = "page";
            $this->tampilan('editpage', $data);
        } else {
            if ($ubahgambar == 1) {
                if ($this->page->do_upload('gambar')) {
                    $link = "./assets/images/page/";
                    unlink($link . $page['gambar']);

                    $data = [
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi'),
                        'kategori' => $this->input->post('kategori'),
                        'gambar' => $this->page->data('file_name')
                    ];

                    $this->db->update('page', $data, ['id_page' => $id]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengubah page!</div>');
                    redirect('admin/page');
                } else {
                    $data['error'] = $this->page->display_errors();
                    $data['ubahgambar'] = $ubahgambar;
                    $data['page'] = $this->db->get_where('page', ['id_page' => $id])->row_array();
                    $data['judul'] = "page";
                    $this->tampilan('editpage', $data);
                }
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'kategori' => $this->input->post('kategori')
                ];

                $this->db->update('page', $data, ['id_page' => $id]);
                $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil mengedit page!</div>');
                redirect('admin/page');
            }
        }
    }
    public function deletePage($id)
    {
        $this->db->delete('page', ['id_page' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-4" role="alert">Berhasil menghapus page!</div>');
        redirect('admin/page');
    }

    public function pengaturanAkun()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        if ($this->input->post('password1')) {
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');
            $this->form_validation->set_rules('password1', 'Password', 'required|trim');
        }

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Pengaturan Akun";
            $this->tampilan('pengaturanakun', $data);
        } else {
            $id = $this->input->post('id');
            $password = $this->input->post('password1');
            $data['username'] = $this->input->post('username');
            if ($this->input->post('password1')) {
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            }
            $this->db->update('admin', $data, ['id' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah akun!</div>');
            redirect('admin/pengaturanakun');
        }
    }

    public function instagram()
    {
        $data['error'] = null;


        $config['upload_path'] = './assets/images/slider-ig/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Slider-ig-';

        $this->load->library('upload', $config, 'gambarPostInstagram');
        $this->gambarPostInstagram->initialize($config);
        if ($this->input->post('submit')) {
            if ($this->gambarPostInstagram->do_upload('gambar')) {
                $post['gambar'] = $this->gambarPostInstagram->data('file_name');
                $this->db->insert('instagram', $post);
                redirect('admin/instagram');
            } else {
                $data['error'] = $this->gambarPostInstagram->display_errors();
            }
        }
        $data['instagram'] = $this->db->get('instagram')->result_array();
        $data['judul'] = "Instagram Post";
        $this->tampilan('instagram', $data);
    }

    public function deleteInstagram($id)
    {
        $instagram = $this->db->get_where('instagram', ['id_instagram' => $id])->row_array();
        $link = "./assets/images/slider-ig/";
        unlink($link . $instagram['gambar']);
        $this->db->delete('instagram', ['id_instagram' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Post berhasil dihapus!</div>');
        redirect('admin/instagram');
    }

    public function pojokProdi($poster = null)
    {
        $data['poster'] = $poster;
        $data['prodi'] = $this->db->get('pojok_prodi')->row_array();
        $data['judul'] = "Update Pojok Prodi";
        $this->tampilan('pojokprodi', $data);
        // $this->form_validation->set_rules('link', 'link', 'required|trim');
        // $config['upload_path'] = './assets/images/poster/';
        // $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        // $config['max_size'] = '100000';
        // $config['file_name'] = 'Poster-';

        // $this->load->library('upload', $config, 'gambarPoster');
        // $this->gambarPoster->initialize($config);
        // if ($this->form_validation->run() == FALSE) {
        //     $data['error'] = null;
        //     $data['poster'] = $this->db->get('poster')->result_array();
        //     $data['judul'] = "Update Poster";
        //     $this->tampilan('poster', $data);
        // }else{
        //     if ($this->gambarPoster->do_upload('gambar')) {
        //         $post['gambar'] = $this->gambarPoster->data('file_name');
        //         $this->db->insert('poster', $post);
        //         redirect('admin/poster');
        //     } else {
        //         $data['error'] = $this->gambarPoster->display_errors();
        //         $data['poster'] = $this->db->get('poster')->result_array();
        //         $data['judul'] = "Update Poster";
        //         $this->tampilan('poster', $data);
        //     }
        // }
    }
    public function editpojokprodi($page, $id)
    {
        if ($page == 'poster') {
            $config['upload_path'] = './assets/images/poster/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
            $config['max_size'] = '100000';
            $config['file_name'] = 'Poster-';

            $this->load->library('upload', $config, 'gambarPoster');
            $this->gambarPoster->initialize($config);

            if ($this->gambarPoster->do_upload('gambar')) {
                $post['poster'] = $this->gambarPoster->data('file_name');
                $post['link'] = $this->input->post('link');
                $this->db->update('pojok_prodi', $post, ['id_pojok_prodi' => $id]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah poster!</div>');
                redirect('admin/pojokprodi');
            } else {
                $post['link'] = $this->input->post('link');
                $this->db->update('pojok_prodi', $post, ['id_pojok_prodi' => $id]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah poster!</div>');
                redirect('admin/pojokprodi');
            }
        } else {
            $data = [
                $page => $this->input->post('page')
            ];

            $this->db->update('pojok_prodi', $data, ['id_pojok_prodi' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah page!</div>');
            redirect('admin/pojokprodi');
        }
    }

    public function organisasi()
    {
        $data['error'] = null;

        $config['upload_path'] = './assets/images/organisasi/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'organisasi-';

        $this->load->library('upload', $config, 'logoOrganisasi');
        $this->logoOrganisasi->initialize($config);
        if ($this->input->post('submit')) {
            if ($this->logoOrganisasi->do_upload('gambar')) {
                $post = [
                    'nama' => $this->input->post('nama'),
                    'gambar' => $this->logoOrganisasi->data('file_name'),
                    'link' => $this->input->post('link')
                ];
                $this->db->insert('organisasi', $post);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambah organisasi!</div>');
                redirect('admin/organisasi');
            } else {
                $data['error'] = $this->logoOrganisasi->display_errors();
            }
        }
        $data['organisasi'] = $this->db->get('organisasi')->result_array();
        $data['judul'] = "Logo Organisasi";
        $this->tampilan('organisasi', $data);
    }

    public function deleteLogoOrganisasi($id)
    {
        $organisasi = $this->db->get_where('organisasi', ['id_organisasi' => $id])->row_array();
        $link = "./assets/images/organisasi/";
        unlink($link . $organisasi['gambar']);
        $this->db->delete('organisasi', ['id_organisasi' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logo berhasil dihapus!</div>');
        redirect('admin/organisasi');
    }

    public function dosen()
    {
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $data['judul'] = "Lecturer Members";
        $this->tampilan('dosen', $data);
    }

    public function tambahdosen()
    {
        $config['upload_path'] = './assets/images/dosen/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Dosen-';

        $this->load->library('upload', $config, 'foto');
        $this->foto->initialize($config);

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = $this->foto->display_errors();
            $data['judul'] = "Tambah Dosen";
            $this->tampilan('tambahdosen', $data);
        } else {
            if ($this->foto->do_upload('foto')) {
                $data = [
                    'foto' => $this->foto->data('file_name'),
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'facebook' => $this->input->post('facebook'),
                    'instagram' => $this->input->post('instagram'),
                    'linkedin' => $this->input->post('linkedin')
                ];
                $this->db->insert('dosen', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambah dosen!</div>');
                redirect('admin/dosen');
            } else {
                $data['error'] = $this->foto->display_errors();
                $data['judul'] = "Tambah Dosen";
                $this->tampilan('tambahdosen', $data);
            }
        }
    }

    public function deleteDosen($id)
    {
        $dosen = $this->db->get_where('dosen', ['id_dosen' => $id])->row_array();
        $link = "./assets/images/dosen/";
        unlink($link . $dosen['foto']);
        $this->db->delete('dosen', ['id_dosen' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">dosen dihapus!</div>');
        redirect('admin/dosen');
    }

    public function editDosen($id, $foto = 0)
    {
        $config['upload_path'] = './assets/images/dosen/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = 'Dosen-';

        $this->load->library('upload', $config, 'foto');
        $this->foto->initialize($config);

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = $this->foto->display_errors();
            $data['foto'] = $foto;
            $data['dosen'] = $this->db->get_where('dosen', ['id_dosen' => $id])->row_array();
            $data['judul'] = "Dosen TIF";
            $this->tampilan('editdosen', $data);
        } else {
            if ($foto) {
                $dosen = $this->db->get_where('dosen', ['id_dosen' => $id])->row_array();
                $link = "./assets/images/dosen/";
                unlink($link . $dosen['foto']);
                if ($this->foto->do_upload('foto')) {
                    $data = [
                        'foto' => $this->foto->data('file_name'),
                        'nama' => $this->input->post('nama'),
                        'jabatan' => $this->input->post('jabatan'),
                        'facebook' => $this->input->post('facebook'),
                        'instagram' => $this->input->post('instagram'),
                        'linkedin' => $this->input->post('linkedin')
                    ];
                    $this->db->update('dosen', $data, ['id_dosen' => $id]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah dosen!</div>');
                    redirect('admin/dosen');
                } else {
                    $data['error'] = $this->foto->display_errors();
                    $data['foto'] = $foto;
                    $data['dosen'] = $this->db->get_where('dosen', ['id_dosen' => $id])->row_array();
                    $data['judul'] = "Dosen TIF";
                    $this->tampilan('editdosen', $data);
                }
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'facebook' => $this->input->post('facebook'),
                    'instagram' => $this->input->post('instagram'),
                    'linkedin' => $this->input->post('linkedin')
                ];
                $this->db->update('dosen', $data, ['id_dosen' => $id]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah dosen!</div>');
                redirect('admin/dosen');
            }
        }
    }

    public function datapage()
    {
        $this->db->select('id_page');
        $this->db->select('judul');
        $page = $this->db->get('page')->result_array();

        echo json_encode($page);
    }

    public function aktifkan()
    {
        $id = $this->input->post('id');
        $is_active = $this->input->post('aktif');

        // echo $id;
        $data['is_active'] = !$is_active;
        $this->db->update('slider', $data, ['id_slider' => $id]);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengganti status slider!</div>');
    }


    public function DataKPTA($id = null)
    {
        $data['editgambar'] = $this->db->get_where('gambarkpta', ['id_gambar' => $id])->row_array();
        $data['gambar'] = $this->db->get('gambarkpta')->result_array();
        $data['judul'] = "DATA IMAGE";
        $this->tampilan('datakpta', $data);
    }
    public function UnduhKPTA()
    {
        $data['judul'] = "DATA UNDUH";
        $this->tampilan('unduhkpta', $data);
    }

    public function inputDataImageKPTA()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $location = $this->input->post('location');

        $config['upload_path'] = './assets/images/kpta/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|';
        $config['max_size'] = '100000';
        $config['file_name'] = $title;

        $this->load->library('upload', $config, 'gambar');
        $this->gambar->initialize($config);

        $this->form_validation->set_rules('judul', 'judul', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = $this->gambar->display_errors();
            $data['judul'] = "DATA IMAGE";
            $this->tampilan('datakpta', $data);
        } else {
            if($id != null){
                
            }else{
                if ($this->gambar->do_upload('gambar')) {
                    $data = [
                        'title' => $title,
                        'gambar' => $this->gambar->data('file_name'),
                        'description' => $description,
                        'location' => $location
                    ];
                    $this->db->insert('gambarkpta', $data);
                    redirect('admin/datakpta');
                } else {
                    $data['error'] = $this->gambar->display_errors();
                    $data['judul'] = "DATA IMAGE";
                    $this->tampilan('datakpta', $data);
                }
            }
        }
    }
}
