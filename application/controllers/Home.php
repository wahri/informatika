<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['link'] = "Home";
        $this->load->view('home', $data);
    }

    public function visiMisi()
    {
        $data['judul'] = "Home";
        $data['link'] = "Profil";
        $this->load->view('visimisi',$data);
    }
}