<?php

class C_Home extends CI_Controller{
	function __construct(){
        parent::__construct();	
        $this->load->model('M_web');	
	}
	public function index(){
        // $data['judul'] = 'Login Option';
        $data['judul'] = 'Home Page';
        $this->load->view('V_Login/pralogin', $data);
    }

    public function login_p(){
		$data['judul'] = 'Login Patient';
        $this->load->view('V_Login/login_p', $data);
    }

    public function login_d(){
		$data['judul'] = 'Login Doctor';
        $this->load->view('V_Login/login_d', $data);
    }

    public function signup(){
		$data['judul'] = 'Registrasi';
        $this->load->view('V_Login/signup', $data);
    }

    public function signup_process(){
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('username_c', 'username_c', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('lengkap','lengkap');
            redirect('C_Home/signup');
        }else{
			$cek = $this->M_web->getusername();
			if($cek > 0){
				$this->session->set_flashdata('ada','terdaftar');
				redirect('C_Home/signup');
			}else{
			$this->M_web->signup();
			$this->session->set_flashdata('success','terdaftar');
            redirect('C_Home/login_p');
            }
        }
    }

    function login_process() {
        $username = $this->input->post('username_c',TRUE);
		$password = $this->input->post('password',TRUE);
	    $validate = $this->M_web->login_pasien($username, $password);
		if($validate > 0){
            $this->M_web->insertriwayat($username);
			redirect('C_Pasien');
		} else{
			$this->session->set_flashdata('result_login', 'Username atau Password yang anda masukkan salah.');
			redirect('C_Home/login_p');
		}
    }

    function login_process_d(){
        $u = $this->input->post('username_d',TRUE);
		$p = $this->input->post('password',TRUE);
	    $validate = $this->M_web->getlogin($u, $p);
		if($validate > 0){
            $this->M_web->insertriwayat_d($u);
			redirect('C_Dokter');
		} else{
			$this->session->set_flashdata('result_login', 'Username atau Password yang anda masukkan salah.');
			redirect('C_Home/login_d');
		}
    }
}