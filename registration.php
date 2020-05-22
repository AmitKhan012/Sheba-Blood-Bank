<?php
	session_start();
	include 'connect_db.php';
	$first_name= $_POST['first_name'];
	$last_name= $_POST['last_name'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	$contract_number= $_POST['contract_number'];
	$email= $_POST['email'];
	$blood_group= $_POST['blood_group'];
	$gender= $_POST['gender'];
	$donar= $_POST['donar'];

	$qry1 = "SELECT * FROM members";
	$check = $db_connect->query($qry1) or die('bad query');
	$f1 = 0;
	while($row = $check->fetch_assoc()) {
     	if(($row["username"]==$username)){
       	//echo $username."<br>" ;
       		$f1 = 1;
       		break;
       	}	
    }	
   	if($f1==1)
    	echo "This username already exist";
    else{
		$qry = "INSERT INTO members(first_name,last_name, username, password, contract_number, email, blood_group, gender, donar)
		VALUES('$first_name', '$last_name', '$username', '$password', '$contract_number', '$email', '$blood_group', '$gender', '$donar')";
		$res = $db_connect->query($qry) or die('bad query');
		$_SESSION['username'] = $username;
		header("location: index.php");

	}
?>