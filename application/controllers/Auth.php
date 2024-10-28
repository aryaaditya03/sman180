<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

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
		show_404();
	}

	public function login()
	{

		$this->load->model('auth_model');
		$this->load->library('form_validation');

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('admin/login/login');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->auth_model->login($username, $password)){
			$this->session->set_flashdata('login', '<div class="alert alert-success opacity-25 alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
			aria-label="Close"><span aria-hidden="true">&times;</span></button>SELAMAT DATANG KEMBALI ADMIN!</div>');
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('login', 'Password Salah!');
			redirect('auth/login');
		}
		$this->load->view('admin/login/login');


	}

	public function login_siswa()
	{
		$this->load->model('auths_model');
        $data['total_siswa'] = $this->Siswa_model->hitungSiswa();
        $data['total_ipa'] = $this->Siswa_model->hitungJurusanIpa();
        $data['total_ips'] = $this->Siswa_model->hitungJurusanIps();
		$this->load->library('form_validation');

		$rules = $this->auths_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('home', $data);
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->auths_model->login($email, $password)){
			$this->session->set_flashdata('messageLogin', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
        	aria-label="Close"><span aria-hidden="true">&times;</span></button>WELCOME STUDENT!</div>');
			redirect('students/dashboard');
		} else {
			$this->session->set_flashdata('pesan', 'Password Salah!');
			redirect('home' , $data);
		}

	}

	public function sendEmail()
    {
		$this->load->model('auths_model');
		$this->load->library('form_validation');

		$rules = $this->auths_model->emailrules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('siswaa/resetpw');
		}

		$email = $this->input->post('resetpw');
        
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

        $this->email->from('sman180@gmail.com', 'SMAN-180');

        $this->email->to($email);

        $this->email->subject('RESET PASSWORD!');

        $this->email->message("HALO SISWA BARU! <br><br> KLIK <strong><a href='localhost/newstudentinfo/auth/cekData'  target='_blank' rel='noopener'>DISINI</a></strong> UNTUK RESET PASSWORD");

        if ($this->email->send()) {
        $this->session->set_flashdata('messageEmailPw', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
        aria-label="Close"><span aria-hidden="true">&times;</span></button>LINK RESET PASSWORD TELAH DIKIRIMKAN KE EMAIL ANDA!</div>');
            redirect(site_url('auth/sendEmail'));
        } else {
        $this->session->set_flashdata('messageEmailPw', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
        aria-label="Close"><span aria-hidden="true">&times;</span></button>GAGAL MENGIRIM KE EMAIL ANDA!</div>');
            redirect(site_url('auth/sendEmail'));

        }
		$this->load->view('siswaa/resetpw');
    }

	public function ubah_password($id = null)
	{
		$this->load->library('form_validation');
		$this->load->model('auths_model');
		$this->load->model('siswa_model');
		$data['current_user'] = $this->auths_model->current_user();
		$data['current_user2'] = $this->auths_model->getById($id);

		if ($this->input->method() === 'post') {
			$rules = $this->auths_model->password_rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
                $this->session->set_flashdata('messagePw', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>SALAH!</div>');
                $this->load->view("siswaa/gantipw", $data);
			}

			$new_password_data = [
				'id_siswa' => $data['current_user']->id_siswa,
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];

			if($this->auths_model->updateDt($new_password_data)){
				$this->session->set_flashdata('messageResPw', '<div class="alert alert-success alert-dismissible" role="alert"><button type=""button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD BERHASIL DIUBAH!</div>');
                redirect('auth/ubah_password');
			} else{
				$this->session->set_flashdata('messageResPw', '<div class="alert alert-danger alert-dismissible" role="alert"><button type=""button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD GAGAL DIUBAH!</div>');
                redirect('auth/ubah_password');
			}
		}

		$this->load->view("siswaa/gantipw", $data);
	}

	public function cekData()
	{
		$this->load->model('auths_model');
		$this->load->library('form_validation');

		$rules = $this->auths_model->cek_rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('siswaa/login');
		}

		$email = $this->input->post('email');

		if($this->auths_model->cekData($email)){
			redirect('auth/ubah_password');
		} else {
			$this->session->set_flashdata('messageLoginSiswa', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD SALAH!</div>');
		}

		$this->load->view('siswaa/login');
	}

	public function logout()
	{
		$this->load->model('auths_model');

		$this->auths_model->logout();
		redirect('home');
	}

	public function logoutAdmin()
	{
		$this->load->model('auths_model');

		$this->auths_model->logout();
		redirect('auth/login');
	}
}