<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemb_model extends CI_Model
{
    private $_table = "pembayaran";

    public $id_pembayaran;
    public $statuspembayaran;
    public $nominal;
    public $tanggal_upload;
    public $bukti;

    public function save($data)
	{
		return $this->db->insert($this->_table, $data);
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pembayaran" => $id])->row();
    }

    public function updateDt($data)
	{
		if (!$data['id_pembayaran']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id_pembayaran' => $data['id_pembayaran']]);
	}
}

