<?php 


class Zulmi_Latifah extends Controller{
	public function index($to = "Bapak/Ibu/Saudara(i)"){
		$data['to'] = str_replace('_', ' ', $to);
		$data['title'] = 'Zulmi & Latifah';
		$data['css'] = 'Zulmi_Latifah';
		$data['js'] = 'Zulmi_Latifah';
		$this->view('tamplates/header', $data);
		$this->view('Undangan/Zulmi_Latifah', $data);
		$this->view('tamplates/footer', $data);
	}
}