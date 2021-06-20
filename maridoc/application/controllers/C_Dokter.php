<?php

class C_Dokter extends CI_Controller{
	function __construct(){
        parent::__construct();	
        $this->load->model('M_web');	
	}
	public function index(){
        $data['judul'] = 'Home';
        $data['user'] = $this->M_web->getuser_d();
		$this->load->view('V_Dokter/header', $data);
        $this->load->view('V_Dokter/homepage', $data);
        $this->load->view('V_Dokter/tabkanan2');
        $this->load->view('V_Dokter/footer');
    }

    public function tabchat(){
        $data['judul'] = 'Chat';
        $data['user'] = $this->M_web->getuser_d();
        $data['getdata'] = $this->M_web->getroomchat();
		$this->load->view('V_Dokter/header', $data);
        $this->load->view('V_Dokter/menuchat', $data);
        $this->load->view('V_Dokter/tabkanan2');
        $this->load->view('V_Dokter/footer');
    }

    public function detilchat($usc){
        $data['judul'] = 'detil Chat';
        $data['user'] = $this->M_web->getuser_d();
        $data['getdata'] = $this->M_web->getUsinroomchat($usc);
        $data['pesan'] = $this->M_web->showchat_d($usc);
		$this->load->view('V_Dokter/header', $data);
        $this->load->view('V_Dokter/chatpasien', $data);
        $this->load->view('V_Dokter/tabkanan2');
        $this->load->view('V_Dokter/footer');
    }

    public function kirimchat($usc){
        $pesan_d = $this->input->post('pesan_d',TRUE);
        $this->M_web->kirimchat_d($usc, $pesan_d);
        $data['judul'] = 'detil Chat';
        $data['user'] = $this->M_web->getuser_d();
        $data['getdata'] = $this->M_web->getUsinroomchat($usc);
        $data['pesan'] = $this->M_web->showchat_d($usc);
		$this->load->view('V_Dokter/header', $data);
        $this->load->view('V_Dokter/chatpasien', $data);
        $this->load->view('V_Dokter/tabkanan2');
        $this->load->view('V_Dokter/footer');
    }

}