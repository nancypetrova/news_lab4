<?php
	error_reporting(0);
	$db_host = 'localhost';
	$db_user = 'root';
	$db_password = 'M_2u4s8e6@';
	$db_name = 'blog';
	
	$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if (!$link) {
    	die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
	}
	if(!mysqli_set_charset($link, "utf8")){
		printf("Error: ".mysqli_error($link));
	}
?>