<?php

	$user = 'root';
	$pass = '';
	$db = 'blood_bank_management';
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');
	/*if($db_connect){
		echo "string";
	}*/
?>