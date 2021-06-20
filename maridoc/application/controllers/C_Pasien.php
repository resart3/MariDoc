<?php

class C_Pasien extends CI_Controller{

	function __construct(){
        parent::__construct();	
        $this->load->model('M_web');	
    }
    
	public function index(){
        $data['judul'] = 'Home';
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->getAllDokter();
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/homepage', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function menuobat(){
        $data['judul'] = 'Menu Obat';
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->getAllObat();
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/menuobat', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function pesankeranjang($kode){
        $data['getdata'] = $this->M_web->beliObat($kode);
        redirect('C_Pasien/menuobat');
    }
    
    public function detilobat($kode){
        $data['judul'] = "Detil Obat";
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->getObat($kode);
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/viewdetilobat', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function belidetil($kode){
        $data['getdata'] = $this->M_web->beliObat($kode);
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->getObat($kode);
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/viewdetilobat', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function tabkeranjang(){
        $data['judul'] = "keranjang";
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->showkeranjang();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/keranjang', $data);
        $this->load->view('V_Pasien/tabkanan2', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function deleteitem($kode){
        $data['getdata'] = $this->M_web->delpemesanan($kode);
        redirect('C_Pasien/tabkeranjang');
    }

    public function filterluar(){
        $data['judul'] = 'Menu Obat';
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->filter_luar();
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/menuobat', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function filterdalam(){
        $data['judul'] = 'Menu Obat';
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->filter_dalam();
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/menuobat', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function filternamaobat(){
        $data['judul'] = 'Menu Obat';
        $kode = $this->input->post('search_obat',TRUE);
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->carinamaobat($kode);
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/menuobat', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function filternamadokter(){
        $data['judul'] = 'Home';
        $data['user'] = $this->M_web->getuser();
        $kode = $this->input->post('search_obat',TRUE);
        $data['getdata'] = $this->M_web->carinamadokter($kode);
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/homepage', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function bayar(){
        $cek = $this->M_web->hititem();
        if ($cek != 0){
            $this->M_web->pembayaran();
            $this->session->set_flashdata('item','sukses');
        }
        else{
            $this->session->set_flashdata('titem','untuk dibayar');          
        }
        redirect('C_Pasien/tabkeranjang');    
    }

    public function chat($kode){
        $data['judul'] = 'Home';
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->getUSdokter($kode);
        $data['pesan'] = $this->M_web->showchat($kode);
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/chatdokter', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }

    public function kirimchat($usD){
        $pesan_c = $this->input->post('pesan_c',TRUE);
        $this->M_web->kirimchat($usD, $pesan_c);
        $data['user'] = $this->M_web->getuser();
        $data['getdata'] = $this->M_web->getUSdokter($usD);
        $data['pesan'] = $this->M_web->showchat($usD);
        $data['count'] = $this->M_web->count();
        $data['sum'] = $this->M_web->sum();
        $this->load->view('V_Pasien/header', $data);
        $this->load->view('V_Pasien/chatdokter', $data);
        $this->load->view('V_Pasien/tabkanan', $data);
        $this->load->view('V_Pasien/footer');
    }
}