<?php

class M_web extends CI_model{
    
    public function getAllObat(){
		$data = $this->db->query('SELECT * FROM obat');
        return $data->result_array();
	}

	public function getAllDokter(){
		$data = $this->db->query('SELECT * FROM dokter');
        return $data->result_array();
	}

	public function insertriwayat($user){
		$data = [
			"username_c" => $user,
		];
		$this->db->insert('riwayat_login', $data);
	}

	public function getuser(){
		// $data = $this->db->query("SELECT * from riwayat_login where id_login = (SELECT max(id_login) from riwayat_login) ");
		$data = $this->db->query(" SELECT * from customer join riwayat_login using(username_c) where id_login = (SELECT max(id_login) from riwayat_login)  ");
		return $data->result_array();
	}

	public function signup(){
		$data = [
			"nama" => $this->input->post('nama', true),
			"tempat_lahir" => $this->input->post('tempat_lahir', true),
			"tgl_lahir" => $this->input->post('tgl_lahir', true),
			"jk" => $this->input->post('jk', true),
			"alamat" => $this->input->post('alamat', true),
			"username_c" => $this->input->post('username_c', true),
			"password" => $this->input->post('password', true),
		];
		$this->db->insert('customer', $data);
	}

	public function getusername(){
		$username = $this->input->post('username_c', true);
		$data = $this->db->query("SELECT * FROM customer where username_c = '$username'");
		return $data->row_array();
	}

	public function login_pasien($username, $password) {
		$data = $this->db->query("SELECT * FROM customer where username_c = '$username' and password = '$password' ");
		return $data->row();
	}

	public function getObat($kode){
		$this->db->where('kode_obat', $kode);
		return $this->db->get('obat')->result_array();
	}

	public function beliObat($kode){
		$this->db->query("INSERT INTO pemesanan (kode_obat,username_c) SELECT '$kode', username_c from riwayat_login where id_login = (SELECT max(id_login) from riwayat_login)");
	}

	public function pembayaran(){
		$this->db->query("UPDATE customer set saldo = ((SELECT saldo from customer join riwayat_login using(username_c) where id_login = (SELECT max(id_login) from riwayat_login)) - (SELECT sum(harga_obat) from pemesanan join customer using (username_c) join obat using (kode_obat) where username_c = (select username_c from riwayat_login where id_login = (select max(id_login) from riwayat_login)) and status = '')) where username_c = (SELECT username_c from riwayat_login where id_login = (SELECT max(id_login) from riwayat_login))");
		$this->db->query("UPDATE pemesanan SET status = 'lunas' WHERE username_c = (select username_c from riwayat_login where id_login = (select max(id_login) from riwayat_login))");
	}

	public function count(){
		// $data = $this->db->query("SELECT count(kode_obat) from pemesanan");
		$data = $this->db->query("SELECT count(kode_obat) from pemesanan join customer using (username_c) 
			where username_c = (select username_c from riwayat_login where id_login = (select max(id_login) 
			from riwayat_login)) and status = ''");
		return $data->row_array();
	}

	public function sum(){
		// $data = $this->db->query("SELECT sum(harga_obat) from pemesanan join obat using(kode_obat)");
		$data = $this->db->query("SELECT sum(harga_obat) from pemesanan join customer using (username_c) join obat using (kode_obat) where username_c = (select username_c from riwayat_login where id_login = (select max(id_login) from riwayat_login)) and status = ''");
		return $data->row();
	}

	public function hititem(){
		$data = $this->db->query("SELECT * from pemesanan join customer using (username_c) join obat using (kode_obat) where username_c = (select username_c from riwayat_login where id_login = (select max(id_login) from riwayat_login)) and status = ''");
		return $data->row();
	}

	public function showkeranjang(){
		$data = $this->db->query("SELECT * from pemesanan join customer using (username_c) join obat using (kode_obat) where username_c = (select username_c from riwayat_login where id_login = (select max(id_login) from riwayat_login)) and status = ''");
		return $data->result_array();
	}

	public function delpemesanan($kode){
		$this->db->where('id_pemesanan', $kode);
		return $this->db->delete('pemesanan');
	}

	public function filter_luar(){
		$ket = 'luar';
		$data = $this->db->query("SELECT * FROM obat where katagori = '$ket' ");
        return $data->result_array();
	}

	public function filter_dalam(){
		$ket = 'dalam';
		$data = $this->db->query("SELECT * FROM obat where katagori = '$ket' ");
        return $data->result_array();
	}

	public function carinamaobat($kode){
		$data = $this->db->query("SELECT * from obat where nama_obat like '%$kode%'");
		return $data->result_array();
	}

	public function carinamadokter($kode){
		$data = $this->db->query("SELECT * from dokter where nama like '%$kode%'");
		return $data->result_array();
	}

	public function getUSdokter($kode){
		$data = $this->db->query("SELECT * from dokter where username_d = '$kode'");
		return $data->result_array();
	}

	public function showchat($kode){
		$data = $this->db->query("SELECT * from chat where username_c = (select username_c from riwayat_login where id_login = (select max(id_login) from riwayat_login)) and username_d = '$kode'");
		return $data->result_array();
	}

	public function kirimchat($usd, $pesan){
		$this->db->query("INSERT INTO chat (username_c, username_d, pesan_c) values ((SELECT username_c from riwayat_login where id_login = (select max(id_login) from riwayat_login)),'$usd','$pesan')");
	}

	// ini dokter 

	public function getlogin($u, $p){
		$data = $this->db->query("SELECT * FROM dokter where username_d = '$u' and password = '$p' ");
		return $data->row();
	}
	
	

	public function insertriwayat_d($user){
		$data = [
			"username_d" => $user,
		];
		$this->db->insert('riwayat_login', $data);
	}

	public function getuser_d(){
		// $data = $this->db->query("SELECT * from riwayat_login where id_login = (SELECT max(id_login) from riwayat_login) ");
		$data = $this->db->query("SELECT * from dokter join riwayat_login using(username_d) where id_login = (SELECT max(id_login) from riwayat_login)  ");
		return $data->result_array();
	}

	public function getroomchat(){
		$data = $this->db->query("SELECT chat.username_c from chat
		join riwayat_login using(username_d) where id_login = (SELECT max(id_login) from riwayat_login) group by chat.username_c");
		return $data->result_array();
	}

	public function getUsinroomchat($us){
		$data = $this->db->query("SELECT chat.username_c from chat
		join riwayat_login using(username_d)
		where id_login = (SELECT max(id_login) from riwayat_login) and chat.username_c = '$us' group by chat.username_c");
		return $data->result_array();
	}

	public function showchat_d($kode){
		$data = $this->db->query("SELECT * from chat where username_d = (select username_d from riwayat_login where id_login = (select max(id_login) from riwayat_login)) and username_c = '$kode'");
		return $data->result_array();
	}

	public function kirimchat_d($usd, $pesan){
		$this->db->query("INSERT INTO chat (username_d, username_c, pesan_d) values ((SELECT username_d from riwayat_login where id_login = (select max(id_login) from riwayat_login)),'$usd','$pesan')");
	}

	// ini admin

	public function login_admin($n, $p){
		$data = $this->db->query("SELECT * from admin where nip = '$n' and password = '$p'");
		return $data->row();
	}

	public function insertobat($a, $b, $c, $d){
		$this->db->query("INSERT into obat (kode_obat, nama_obat, katagori, harga_obat) values ('$a','$b','$c', $d)");
	}

	public function cekobat($kode){
		$data = $this->db->query("SELECT * FROM obat where kode_obat = '$kode' ");
		return $data->row();
	}

	public function deleteobat($kode){
		$this->db->where('kode_obat', $kode);
		return $this->db->delete('obat');
	}

	public function deletedokter($kode){
		$this->db->where('username_d', $kode);
		return $this->db->delete('dokter');
	}

	public function cekdokter($kode){
		$data = $this->db->query("SELECT * FROM dokter where username_d = '$kode' ");
		return $data->row();
	}

	public function insertdokter($a, $b, $c, $d, $e, $f, $g, $h, $i){
		$this->db->query("INSERT into dokter (nama, no_ijin_prak, gelar, ket_gelar, alamat, jk, ttl, username_d, password) values ('$a','$b','$c', '$d','$e', '$f', '$g', '$h', '$i')");
	}

}