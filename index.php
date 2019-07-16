<?php 

	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS');


	$method = $_SERVER['REQUEST_METHOD'];

	// echo $method;

	$request_uri = $_SERVER['REQUEST_URI'];

	$table = ['contact','projects'];
	$url = rtrim($request_uri,'/');
	$url = filter_var($url, FILTER_SANITIZE_URL);
	$url = explode('/',$url);

	$tablename = (string) $url[3];

	if(isset($url[4]) && $url[4] !==null){
		$id = (int) $url[4];
	}else{
		$id = null;
	}


	if(in_array($tablename,$table)){
		//include credentials
		include_once './config/config.php';
		include_once './api/contact.php';
	}else{
		echo 'Table does not exists';
	}


	// print_r($id);
