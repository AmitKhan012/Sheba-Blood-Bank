<?php
	session_start();
	$user = 'root';
	$pass = '';
	$db = 'blood_bank_management';
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');
	/*if($db_connect){
		echo "string";
	}*/
	$qry4 = "CREATE PROCEDURE `activities`(IN `user` VARCHAR(50), OUT `bb` VARCHAR(12), OUT `tt` VARCHAR(50)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER SELECT blood_group AS bb, tdate AS tt FROM transaction_history WHERE receiver_id = user";
	$res4 = $db_connect->query($qry4) or die('PROCEDURE failed');
	$qry = "CREATE VIEW donar_list AS SELECT first_name, blood_group, contract_number FROM members WHERE donar = '1'";
	$res = $db_connect->query($qry) or die('donar_list creation failed');

	$qry2 = "CREATE VIEW request_list AS SELECT request.username, request.blood_group, tdate, members.contract_number, note FROM request,members WHERE request.username = members.username" ;
	 $res2 = $db_connect->query($qry2) or die('request_list creation failed');

	$qry3 = "INSERT INTO members(first_name,last_name, username, password, contract_number, email, blood_group, gender, donar)
		VALUES('SHAKIL', 'MAHMUD', 'admin', 'admin', '01512345678', 'admin@gmail.com', 'B_positive', 'male', '1')";
	 $res3 = $db_connect->query($qry3) or die('admin insertion failed');
	 $_SESSION['admin'] = "admin";
?>