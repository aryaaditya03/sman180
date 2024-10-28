<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("guru_model");
        $this->load->model("auth_model");
        $this->load->library('form_validation');
        if(!$this->auth_model->current_user()){
        redirect('auth/login');
        }
        
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data["guru"] = $this->guru_model->getAll();
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/guru/data_guru.php", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");
    }

    public function add()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $student = $this->guru_model;
        $validation = $this->form_validation;
        $validation->set_rules($student->rules());

        if ($validation->run()) {
            $student->save();
            $this->session->set_flashdata('messageGuru', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
            aria-label="Close"><span aria-hidden="true">&times;</span></button>DATA BERHASIL DITAMBAH!</div>');
            redirect('admin/guru');
        }


    }

    public function edit($id = null)
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data['current_user2'] = $this->guru_model->getById($id);
        if (!isset($id)) redirect('admin/guru');
       
        $student = $this->guru_model;
        $validation = $this->form_validation;
        $validation->set_rules($student->rules());

        if ($validation->run()) {
            $student->update();
            $this->session->set_flashdata('messageEditGuru', '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
            aria-label="Close"><span aria-hidden="true">&times;</span></button>BERHASIL DI UPDATE!</div>');
        }

        $data["student"] = $student->getById($id);
        if (!$data["student"]) show_404();
        
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view("admin/guru/edit.php", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php", $data);
        $this->load->view("admin/_partials/js.php");
    }


    public function delete($id = null)
	{
		if(!$id){
			show_404();
		}

		$this->load->model('guru_model');
		$this->guru_model->delete($id);

		$this->session->set_flashdata('pesan', 'Data telah dihapus!');
		redirect(site_url('admin/guru'));
	}

    public function CetakPdf()
    {
        $data["guru"] = $this->guru_model->getAll();
        
        $this->load->library('pdfgenerator');
        $data['title'] = "Data Guru";
        $file_pdf = $data['title'];
        $paper = 'A4';
        $orientation = "portrait";
        $html = $this->load->view('data_guru', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
