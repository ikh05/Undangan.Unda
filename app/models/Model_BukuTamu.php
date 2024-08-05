<?php 


class Model_BukuTamu{
	protected $db;
	protected $tabelOrang = 'orang';
	function __construct(){
		$this->db = new DataBase;
	}
	public function simpan($tabel, &$data){
		date_default_timezone_set('Asia/Jakarta');
		if($data['idOrang'] == -1){
			$this->db->query("INSERT INTO $this->tabelOrang (`nama`) VALUES (:nama)");
			$this->db->bind('nama', $data['nama']);
			$this->db->execute();
			// ambil yang paling bawah dan ubah idOrang
			$this->db->query("SELECT id FROM $this->tabelOrang");
			$id = $this->db->resultSet();
			$data['idOrang'] = $id[count($id)-1]['id'];
		}
		$date = new DateTime();
		$date = $date->format('Y-m-d H:i:s');
		$this->db->query("INSERT INTO $tabel (`idOrang`, `isi`, `waktu`) VALUES (:idOrang, :isi, :waktu)");
		$this->db->bind('idOrang', $data['idOrang']);
		$this->db->bind('isi', $data['isi']);
		$this->db->bind('waktu', $date);
		$this->db->execute();
	}
	public function ambil($tabel, $count){
		date_default_timezone_set('Asia/Jakarta');
		$this->db->query("SELECT * FROM $tabel ORDER BY `id` DESC");
		$buku_tamu = $this->db->resultSet();
		if(count($buku_tamu) > (int)$count){
			$n = count($buku_tamu) - (int)$count;
			array_splice($buku_tamu, $n, (int)$count);
		}
		return $buku_tamu;
	}
	public function getAll($tabel){
		$this->db->query("SELECT id FROM $tabel");
		return $this->db->execute();
	}
}