<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
        $this->load->model("auths_model");
        $this->load->model("pemb_model");
        $this->load->library('form_validation');
        if(!$this->auths_model->current_user()){
                redirect('auth/login_siswa');
        }
        }

	public function index()
	{
        $data['current_user'] = $this->auths_model->current_user();
        $this->load->view("siswaa/_partials/head.php");
        $this->load->view("siswaa/_partials/body.php");
        $this->load->view("siswaa/_partials/content.php", $data);
        $this->load->view("siswaa/pembayaran", $data);
        $this->load->view("siswaa/_partials/footer.php");
        $this->load->view("siswaa/_partials/modal.php");
        $this->load->view("siswaa/_partials/js.php");

	}

    public function pemby()
	{
        $data['current_user'] = $this->auths_model->current_user();
        $this->load->view("siswaa/_partials/head.php");
        $this->load->view("siswaa/_partials/body.php");
        $this->load->view("siswaa/_partials/content.php", $data);
        $this->load->view("siswaa/notapemb.php", $data);
        $this->load->view("siswaa/_partials/footer.php");
        $this->load->view("siswaa/_partials/modal.php");
        $this->load->view("siswaa/_partials/js.php");

	}

    public function nota()
	{
		$this->load->library('form_validation');
		$this->load->model('pemb_model');
        $this->load->model('siswa_model');
		$data['current_user'] = $this->auths_model->current_user();
        $data['items'] = $this->db->query("SELECT * FROM pembayaran WHERE id_pembayaran")->result();

        $new_password_data = [
            
            'id_pembayaran' => $this->id_pembayaran = uniqid(),
            'statuspembayaran' => $data['current_user']->statuspembayaran,
            'nominal' => 350000,
            'tanggal_upload' => null,
            'bukti' => null,

            // 'password_updated_at' => date("Y-m-d H:i:s"),
        ];

        $new_data = [
            
            'id_pembayaran' =>  $new_password_data['id_pembayaran']

            // 'password_updated_at' => date("Y-m-d H:i:s"),
        ];

        $this->db->trans_start();
        $this->db->insert('pembayaran', $new_password_data);
        $this->db->update('siswa', $new_data);
        $this->db->trans_complete();
        
        redirect('students/pembayaran/uploadBukti');
    }



    public function not()
	{
        $data['current_user'] = $this->auths_model->current_user();
        $this->load->view("siswaa/_partials/head.php");
        $this->load->view("siswaa/_partials/body.php");
        $this->load->view("siswaa/_partials/content.php", $data);
        $this->load->view("siswaa/nota", $data);
        $this->load->view("siswaa/_partials/footer.php");
        $this->load->view("siswaa/_partials/modal.php");
        $this->load->view("siswaa/_partials/js.php");

	}

    public function bukti()
	{
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
		$this->load->model('pemb_model');
        $this->load->model('auth_model');
        $data['current_user'] = $this->auths_model->current_user();
        
            if ($this->input->method() === 'post') {
                // the user id contain dot, so we must remove it
                $file_name = str_replace('bukti_','',$data['current_user']->nisn);
                $config['upload_path']          = FCPATH.'./img/uploads/bukti/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['file_name']            = $file_name;
                $config['overwrite']            = true;
                $config['max_size']             = 3000; // 1MB
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;
        
                $this->load->library('upload', $config);
        
                if (!$this->upload->do_upload('bukti')){
                    $data['error'] = $this->upload->display_errors();
                } else {
                    $uploaded_data = $this->upload->data();
                }
                
        
                $new_data = [
                    'id_siswa' => $data['current_user']->id_siswa,
                    'bukti' => $uploaded_data['file_name'],
                ];
        
                if ($this->siswa_model->updateDt($new_data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>BUKTI BERHASIL DI UPLOAD KEMBALI!</div>');
                    redirect(site_url('students/pembayaran/bukti'));
                } else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>GAGAL</div>');
                }
                
            }
            
            $this->load->view("siswaa/_partials/head.php");
            $this->load->view("siswaa/_partials/body.php");
            $this->load->view("siswaa/_partials/content.php", $data);
            $this->load->view("siswaa/nota", $data);
            $this->load->view("siswaa/_partials/footer.php");
            $this->load->view("siswaa/_partials/modal.php");
            $this->load->view("siswaa/_partials/js.php");

        }

        public function uploadBukti()
	    {
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
		$this->load->model('pemb_model');
        $this->load->model('auth_model');
        $data['current_user'] = $this->auths_model->current_user();
        
            if ($this->input->method() === 'post') {
                // the user id contain dot, so we must remove it
                $file_name = str_replace('bukti_','',$data['current_user']->nisn);
                $config['upload_path']          = FCPATH.'./img/uploads/bukti/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['file_name']            = $file_name;
                $config['overwrite']            = true;
                $config['max_size']             = 3000; // 1MB
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;
        
                $this->load->library('upload', $config);
        
                if (!$this->upload->do_upload('bukti')){
                    $data['error'] = $this->upload->display_errors();
                } else {
                    $uploaded_data = $this->upload->data();
                }
                
                $new_data = [
                    'id_siswa' => $data['current_user']->id_siswa,
                    'bukti' => $uploaded_data['file_name'],
                ];
        
                if ($this->siswa_model->updateDt($new_data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>BUKTI PEMBAYARAN TELAH DI-UPLOAD!</div>');
                    redirect(site_url('students/pembayaran'));
                } else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>GAGAL</div>');
                    redirect(site_url('students/pembayaran/uploadBukti'));
                }
                
            }
            
            $this->load->view("siswaa/_partials/head.php");
            $this->load->view("siswaa/_partials/body.php");
            $this->load->view("siswaa/_partials/content.php", $data);
            $this->load->view("siswaa/notapemb.php", $data);
            $this->load->view("siswaa/_partials/footer.php");
            $this->load->view("siswaa/_partials/modal.php");
            $this->load->view("siswaa/_partials/js.php");


        }
        
        public function CetakPdf()
        {
        $data["siswa"] = $this->Siswa_model->getAll();

        $this->load->library('pdfgenerator');
        $data['title'] = "Data Siswa";
        $file_pdf = $data['title'];
        $paper = 'A4';
        $orientation = "portrait";
        $html = $this->load->view('data_siswa', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
        }

}
