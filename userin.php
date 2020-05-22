<?php
	$username = $_SESSION['username'];
	$qry = "CALL`activities`(:$username);";
	$res = $db_connect->query($qry) or die('bad query, previous activities');
	$res->bindParam(":username",$username);
	$res->exucute();
?>