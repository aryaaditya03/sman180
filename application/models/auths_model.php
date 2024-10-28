<?php

class Auths_model extends CI_Model
{
	private $_table = "siswa";
	const SESSION_KEY = 'user_id';

	public function rules()
	{
		return [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function emailrules()
	{
		return [
			[
				'field' => 'resetpw',
				'label' => 'Resetpw',
				'rules' => 'required'
			]
		];
	}

	public function password_rules()
	{
		return [
			[
				'field' => 'password',
				'label' => 'New_password',
				'rules' => 'required|min_length[5]'
			],
			[
				'field' => 'password_confirm',
				'label' => 'Password_confirm',
				'rules' => 'required|min_length[5]|matches[password]'
			],
		];
	}

	public function cek_rules()
	{
		return [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			]
		];
	}

	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$query = $this->db->get($this->_table);
		$siswa = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$siswa) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $siswa->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $siswa->id_siswa]);
		$this->_update_last_login($siswa->id_siswa);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id_siswa' => $user_id]);
		return $query->row();
	}

	public function current_jadwal()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id_jadwal' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		session_start();
		session_destroy();
	}

	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id_siswa' => $id]);
	}

	public function update($data)
	{
		if (!$data['id_siswa']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id_siswa' => $data['id_siswa']]);
	}
	
	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_siswa" => $id])->row();
    }

	public function updateDt($data)
	{
		if (!$data['id_siswa']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id_siswa' => $data['id_siswa']]);
	}

	public function cekData($email)
	{
		$this->db->where('nisn', $email);
		$query = $this->db->get($this->_table);
		$siswa = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$siswa) {
			return FALSE;
		}


		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $siswa->id_siswa]);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

}