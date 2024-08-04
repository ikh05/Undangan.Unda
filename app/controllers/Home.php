<?php    
class Home extends Controller{
	public function index(){
		$this->view('Error/UndanganNotFound');
	}
	public function zulmi_latifah($to = "Bapak/Ibu/Saudara(i)"){
		$data['to'] = str_replace('_', ' ', $to);
		$data['title'] = 'Zulmi & Latifah';
		$data['dir-assets'] = 'Zulmi_Latifah';// assets 
		$this->view('tamplates/header', $data);
		$this->view('Undangan/Zulmi_Latifah', $data);
		$this->view('tamplates/footer', $data);
	}
}