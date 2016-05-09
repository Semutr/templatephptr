<?php
	// Config
	if (file_exists('config.php')) {
		require_once('config.php');
	}

	// Template
	require_once(DIR_INC . 'template.php');
	
	$page = isset($_GET['page']);
	
	switch ($page) {
		case ('servis'):
			include ''. DIR_PHP . 'servis.php';
		break;
		default:
			include(''. DIR_PHP . 'home.php'); // default url home.php
	}
?>