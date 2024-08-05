<?php 
	if($_SERVER['SERVER_NAME'] === 'localhost'){
		define('DB_HOST', 'localhost');
		define('DB_USER', 'root');
		define('DB_PASS', '');
		define('DB_NAME', 'undangan_unda');
		define('BASE_URL', 'http://localhost/Undangan.ku/');
	}else{
		define('DB_HOST', 'sql113.infinityfree.com');
		define('DB_USER', 'if0_36479043');
		define('DB_PASS', 'Ikhsan05');
		define('DB_NAME', 'if0_36479043_undangan_unda');
		if($_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1'){
			define('BASE_URL', 'http://Undangan-Unda.ich.free.nf/');
		}else{
			define('BASE_URL', 'https://Undangan-Unda.ich.free.nf/');
		}
	define('BASE_ID_ORANG', 'undangan.unda-idOrang');

	}
 ?> 
