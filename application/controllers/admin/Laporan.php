<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
        $this->load->model("pemb_model");
        $this->load->model("auth_model");
        $this->load->library('form_validation');
        if(!$this->auth_model->current_user()){
        redirect('auth/login');
        }
    }

    public function index()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/laporan", $data);
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

    }

    public function CetakPdf()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $data["pemb"] = $this->pemb_model->getAll();

        $this->load->library('pdfgenerator');
        $data['title'] = "Laporan Pembayaran";
        $file_pdf = $data['title'];
        $paper = 'A4';
        $orientation = "portrait";
        $html = $this->load->view('admin/cetaklaporan', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function verifikasi($id = null)
    {
        $this->load->model('siswa_model');
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $data['current_user2'] = $this->siswa_model->getById($id);
        $data['test'] = $this->siswa_model->getdata();

        if ($this->input->method() === 'post') {
			$rules = $this->siswa_model->laporan_rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				redirect(site_url('admin/laporan/verifikasi'));
			}
        

        $where = [
            'id_siswa'=> $data['current_user2']->id_siswa,
            'statuspembayaran' => $this->input->post('statuspembayaran'), 
        ];
        $this->siswa_model->updateDt($where);
        $this->session->set_flashdata('messageLaporan', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
        aria-label="Close"><span aria-hidden="true">&times;</span></button>SISWA TELAH DI VERIFIKASI!</div>');
        redirect(site_url('admin/laporan'));
        }

        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/verif-laporan.php", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

    }

}