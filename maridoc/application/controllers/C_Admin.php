<?php

class C_Admin extends CI_Controller{
	function __construct(){
        parent::__construct();	
        $this->load->model('M_web');	
	}
	public function index(){
        $data['judul'] = 'Login Admin';
		$this->load->view('V_Admin/login_a', $data);
    }

    function login_process() {
        $nip = $this->input->post('nip',TRUE);
		$password = $this->input->post('password',TRUE);
	    $validate = $this->M_web->login_admin($nip, $password);
		if($validate > 0){
			redirect('C_Admin/dokter');
		} else{
			$this->session->set_flashdata('result_login', 'NIP atau Password yang anda masukkan salah.');
			redirect('C_Admin');
		}
    }

    public function obat(){
		$data['judul'] = 'Login Home';
		$data['getdata'] = $this->M_web->getAllObat();
		$this->load->view('V_Admin/header', $data);
		$this->load->view('V_Admin/obat', $data);
		$this->load->view('V_Admin/footer');
	}

	public function tambahobat(){
		$data['judul'] = 'tambah obat';
		$this->load->view('V_Admin/header', $data);
		$this->load->view('V_Admin/tambahobat');
	}

	public function addobat(){
		$kode = $this->input->post('kode_obat',TRUE);
		$nama = $this->input->post('nama_obat',TRUE);
		$kat = $this->input->post('katagori',TRUE);
		$harga = $this->input->post('harga_obat',TRUE);
		$validate = $this->M_web->cekobat($kode);
		if ($validate <> 0){
			$this->session->set_flashdata('ada','terdaftar');
			redirect('C_Admin/tambahobat');
		}
		else{
			$this->M_web->insertobat($kode,$nama,$kat,$harga);
			$this->session->set_flashdata('success','ditambahkan');
			redirect('C_Admin/obat');
		}
	}

	public function deleteobat($kode){
		$this->M_web->deleteobat($kode);
		$this->session->set_flashdata('berhasil','dihapus');
		redirect('C_Admin/obat');
	}

	public function dokter(){
		$data['judul'] = 'Login Home';
		$data['getdata'] = $this->M_web->getAllDokter();
		$this->load->view('V_Admin/header', $data);
		$this->load->view('V_Admin/dokter', $data);
		$this->load->view('V_Admin/footer');
	}

	public function tambahdokter(){
		$data['judul'] = 'tambah dokter';
		$this->load->view('V_Admin/header', $data);
		$this->load->view('V_Admin/tambahdokter');
	}

	public function adddokter(){
		$a = $this->input->post('nama',TRUE);
		$b = $this->input->post('no_ijin_prak',TRUE);
		$c = $this->input->post('gelar',TRUE);
		$d = $this->input->post('ket_gelar',TRUE);
		$e = $this->input->post('alamat',TRUE);
		$f = $this->input->post('jk',TRUE);
		$g = $this->input->post('ttl',TRUE);
		$h = $this->input->post('username_d',TRUE);
		$i = $this->input->post('password',TRUE);
		$validate = $this->M_web->cekdokter($h);
		if ($validate <> 0){
			$this->session->set_flashdata('ada','terdaftar');
			redirect('C_Admin/tambahdokter');
		}
		else{
			$this->M_web->insertdokter($a,$b,$c,$d,$e,$f,$g,$h,$i);
			$this->session->set_flashdata('success','ditambahkan');
			redirect('C_Admin/dokter');
		}
	}

	public function deletedokter($kode){
		$this->M_web->deletedokter($kode);
		$this->session->set_flashdata('berhasil','dihapus');
		redirect('C_Admin/dokter');
	}


	

}