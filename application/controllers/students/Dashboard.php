<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
        $this->load->model("auths_model");
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
        $this->load->view("siswaa/dashboard", $data);
        $this->load->view("siswaa/_partials/footer.php");
        $this->load->view("siswaa/_partials/modal.php");
        $this->load->view("siswaa/_partials/js.php");

	}
        
        public function sendEmail()
        {
        $data['current_user'] = $this->auths_model->current_user();
        
        $config = [
            'useragent' => "CodeIgniter",
            'mailpath' => "/usr/bin/sendmail",
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'aryagawo114@gmail.com',  
            'smtp_pass'   => 'ddet mvby pqbw bmqm',  
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('newstudentinfo55@gmail.com', 'NewStudentInformation');

        $this->email->to($data['current_user']->email);

        $this->email->subject('LINK UNTUK TEST UJIAN | NESI');

        $this->email->message("HALO CALON SISWA BARU! <br><br> KLIK <strong><a href='https://forms.gle/ZQTGYoSYJmenEvxm6'  target='_blank' rel='noopener'>DISINI</a></strong> UNTUK MELAKUKAN TEST UJIAN!");

        if ($this->email->send()) {
        $this->session->set_flashdata('messageEmail', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
        aria-label="Close"><span aria-hidden="true">&times;</span></button>LINK TELAH BERHASIL DIKIRIMKAN KE EMAIL ANDA!</div>');
            redirect(site_url('students/dashboard'));
        } else {
        $this->session->set_flashdata('messageEmail', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
        aria-label="Close"><span aria-hidden="true">&times;</span></button>GAGAL MENGIRIM KE EMAIL ANDA!</div>');
            redirect(site_url('students/dashboard'));

        }
        }

        public function exportToPdf()
    {
        $id_jadwal = $this->session->userdata('id_jadwal');
        
        $data['user'] = $this->session->userdata('nama_siswa');
        $data['judul'] = "Cetak Bukti Booking";
        $data['current_user'] = $this->auths_model->current_user();
        
        $this->load->library('dompdf_gen');
        
        $this->load->view('siswaa/cetak_jadwal', $data);
        
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("bukti-booking-$id_jadwal.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }
}
