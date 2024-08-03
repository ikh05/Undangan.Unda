<?php 
	if($_SERVER['SERVER_NAME'] === 'localhost'){
		define('BASE_URL', 'http://localhost/Undangan.ku/');
	}elseif($_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1'){
		define('BASE_URL', 'http://Undangan-Unda.ich.free.nf/');
	}else{
		define('BASE_URL', 'https://Undangan-Unda.ich.free.nf/');
	}
 ?> 