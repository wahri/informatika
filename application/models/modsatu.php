<?php

class modsatu extends CI_Model
{
    public function getBarang()
    {
        $data = $this->db->query('SELECT * FROM barang');
    }
}
