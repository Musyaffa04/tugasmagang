<?php 
	session_start();
	require_once 'model.php';
	$model = new model();
	$model->logout($_SESSION['email']);
	session_destroy();
	header('Location: login.php')
?>