<?php
session_start();


if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1' || $_SERVER['HTTP_HOST'] == '::1'){
	define('LOCAL_MODE', 1);
	}else{
	define('LOCAL_MODE', 0);	
}



if(LOCAL_MODE == 1){
	
	define('HOST_NAME','localhost');
	define('USER_NAME','root');
	define('PASSWORD','');
	define('DB_NAME','eshop');
	$prefix = '/startbootstrap-business-casual';
	
	}elseif(LOCAL_MODE == 0){
		
	define('HOST_NAME','localhost');
	define('USER_NAME','eshop');
	define('PASSWORD','eshop123');
	define('DB_NAME','eshop');
	$prefix = '';
		
}

$connection = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME) or die('Connection Failed!!!');
mysqli_set_charset($connection,'utf-8');


define('KEY', 'ADHBBIihigi!@#$$%^&*()_+');


###############
include('messages/msg.php');
//include('jdf.php');