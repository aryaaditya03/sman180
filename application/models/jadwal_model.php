<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    private $_table = "jadwal";

    public $id_jadwal;

    public $mapel;
    public $kode_guru;
    public $jurusan;
    public $jam;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
}

