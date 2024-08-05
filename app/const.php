<?php 
	if($_SERVER['SERVER_NAME'] === 'localhost'){
		define('DB_HOST', 'localhost');
		define('DB_USER', 'root');
		define('DB_PASS', '');
		define('DB_NAME', 'undangan_unda');
		define('BASE_URL', 'http://localhost/Undangan.ku/');

	}else{
		// DB Hosting
		define('DB_HOST', 'sql113.infinityfree.com');
		define('DB_USER', 'if0_36479043');
		define('DB_PASS', 'Ikhsan05');
		define('DB_NAME', 'if0_36479043_undangan_unda');
		define('BASE_URL', ($_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/public/'));
	}


	define('BASE_ID_ORANG', 'undangan.unda-idOrang');
 ?> 