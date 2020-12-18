<?php
	
	require_once('vendor/autoload.php');

	$google = new Google_Client();

	$google->setClientId('77423303986-8dtpf5cfj829oin6rnkvvm5rku28free.apps.googleusercontent.com');

	$google->setClientSecret('0dM9BfzLm18TWLV2UB6bvrlO');

	$google->setRedirectUri('https://testingmetasoft.cl/Quillota/');

	$google->addScope('email');

	$google->addScope('profile');

	session_start();

?>