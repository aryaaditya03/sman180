<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("auth_model");
            $this->load->model("Siswa_model");
            $this->load->model("user_model");
            $this->load->library('form_validation');
            
        }

	public function index()
	{
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $data['total_siswa'] = $this->Siswa_model->hitungSiswa();
        $data['total_ipa'] = $this->Siswa_model->hitungJurusanIpa();
        $data['total_ips'] = $this->Siswa_model->hitungJurusanIps();
        $this->load->view("home", $data);


	}
}
