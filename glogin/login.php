<?php 
require_once 'vendor/autoload.php';
require_once 'model.php';
/*
	domain homepage = http://localhost:8080/
	redirect url = http://localhost:8080/tugasmagang/glogin/login.php
*/
session_start();
 
$clientID =  '51747509674-kf6tlh4l2dqihi955ct4cj4u51ts8qlm.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost:8080/tugasmagang/glogin/login.php';


//Membuat client request untuk google
$client = new Google_CLient();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('Profile');
$client->addScope('email');

if(isset($_GET['code'])){
	$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
	$client->setAccessToken($token);
	//Mengambil data profile pengguna
	$gauth = new Google_Service_Oauth2($client);
	$google_info = $gauth->userinfo->get();
	$data = [];
	$email = $google_info->email;
	$name = $google_info->name;
	$nama_depan = $google_info->givenName;
	$_SESSION['email'] = $email;
	$_SESSION['name'] = $name;
	$_SESSION['nama_depan'] = $nama_depan;
	$model = new model();
	if(mysqli_num_rows($model->cek($email))){
		header('Location: dashboard.php');
		die();
	}else{
		header('Location: register.php');
		die();
	}

	// echo 'Selamat datang '.$name."Kamu terdaftar sebagai pengguna".$email;
	// var_dump($google_info);
}else{
	echo "<a href='".$client->createAuthUrl()."'>Login dengan Google</a>";
}