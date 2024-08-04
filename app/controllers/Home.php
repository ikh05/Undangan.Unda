<?php    
class Home extends Controller{
	public function index($error='Error 404: Undangan Tidak Ditemukan!'){
		$this->view('Error/UndanganNotFound', $error);
	}
	public function zulmi_latifah($to = "Bapak/Ibu/Saudara(i)"){
		$data['to'] = str_replace('_', ' ', $to);
		$data['title'] = 'Zulmi & Latifah';
		$data['dir-assets'] = 'Zulmi_Latifah';// assets 
		$this->view('tamplates/header', $data);
		$this->view('Undangan/Zulmi_Latifah', $data);
		$this->view('tamplates/footer', $data);
	}

	public function kirimAjax(){
		if(empty($_POST)){
			$this->index('Eror 403: Halaman kirimAjax Tidak Boleh Diakses!');
		}else{
			var_dump($_POST);
		}
	}
	public function ambilAjax(){
		if(empty($_POST)){
			$this->index('Eror 403: Halaman ambilAjax Tidak Boleh Diakses!');
		}else{
			var_dump($_POST);
		}
	}
}