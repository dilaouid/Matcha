<?php

	date_default_timezone_set('Europe/Paris');

	session_start();

	if (file_exists('setup/index.php')) {
		header('Location: loading.php');
		exit();
	}

	require_once('Class/Libft.php');

	// IDENTIFIANTS POUR LA BASE DE DONNÉES, NE PAS TOUCHER ! //

    include('db.php');

    ////////////////////////////////////////////////////////////

    include('log.php');

	$Libft = new Matcha\Libft($DB);

	$alert = null;
	$userid = -1;
	$search = false;
	
	if (isset($_SESSION['id'])) {
		$userid = $_SESSION['id'];
		$Libft->updateLastActivity($userid);
	}

?>