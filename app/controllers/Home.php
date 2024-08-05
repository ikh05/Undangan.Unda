<?php    
class Home extends Controller{
	public function index($error='Error 404: Undangan Tidak Ditemukan!'){
		$this->view('Error/UndanganNotFound', $error);
	}
	public function zulmi_latifah($to = "Bapak/Ibu/Saudara(i)"){
		$data['to'] = str_replace('_', ' ', $to);
		$data['title'] = 'Zulmi & Latifah';
		$data['dir-assets'] = 'Zulmi_Latifah';// assets 
		$data['nama-tabel'] = 'zulmi_latifah'; /*jangan diubah*/
		$this->view('tamplates/header', $data);
		$this->view('Undangan/Zulmi_Latifah', $data);
		$this->view('tamplates/footer', $data);
	}

	public function kirimAjax(){
		if(empty($_POST)){
			$this->index('Eror 403: Halaman kirimAjax Tidak Boleh Diakses!');
		}else{
			$this->model('Model_BukuTamu')->simpan($_POST['nama-tabel'], $_POST);
			echo (json_encode($_POST));
		}
	}
	public function ambilAjax(){
		if(empty($_POST)){
			$this->index('Eror 403: Halaman ambilAjax Tidak Boleh Diakses!');
		}else{
			// MEKANISME MENGECEK KE DATABASE
			// $data = $this->model('Model_BukuTamu')->ambil($_POST['namaTabel'], $_POST['count']);
			echo (json_encode($_POST));
		}
	}
}