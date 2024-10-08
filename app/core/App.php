<?php 

class App{
	protected $controller = 'Home'; 
	protected $method = "index";
	protected $params = [];
	function __construct(){
		$url = $this->parse_url();
		// var_dump($url);die;
		if(!empty($url)){
			include_once "../app/controllers/".$this->controller.".php";
			$this->controller = new $this->controller;

			// method
			if(isset($url[0])){
				if(method_exists($this->controller, $url[0])){
					$this->method = $url[0];
				}
				unset($url[0]);
			}

			// params
			if(!empty($url)){
				$this->params = array_values($url);
			}

		}

		// jalankan
		if(is_string($this->controller)){
			require_once '../app/controllers/'.$this->controller.'.php';
			$this->controller = new $this->controller;
		}
		call_user_func_array([$this->controller, $this->method], $this->params);
	}
	protected function parse_url(){
		if(isset($_GET['url'])){
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
		return [];
	}
}