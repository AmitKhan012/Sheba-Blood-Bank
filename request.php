<?php
	session_start();
	include 'connect_db.php';

//	if( isset($_SESSION['username']) AND !empty($_SESSION['username']) ){echo $_SESSION['username']; }

	if(isset($_SESSION['username']) AND !empty($_SESSION['username'])) {
		$blood_group= $_POST['blood_group'];
		echo "$blood_group"."<br>";
		$username = $_SESSION['username'];
		echo "$username"."<br>";
		$tdate = $_POST['tdate'];
		echo "$tdate"."<br>";
		$note = $_POST['note'];
		echo "$note"."<br>";
		$preqry1 = "SELECT contract_number FROM members WHERE username = '$username' ";
 		$res = $db_connect->query($preqry1) or die('bad query');
 		$row = $res->fetch_assoc();
 		$contract_number = $row['contract_number']; 
		$qry = "SELECT * FROM request WHERE username = '$username' ";
 		$res = $db_connect->query($qry) or die('bad query');
 		if ($res-> num_rows> 0) {
			header('Location:profile.php'); 				
 		}
 		else{
			echo "$contract_number"."<br>";
			$qry2 = "INSERT INTO request(username, blood_group, contract_number, note, tdate)
			VALUES('$username', '$blood_group', '$contract_number', '$note', '$tdate')";
			$ress = $db_connect->query($qry2) or die('INSERTION failed');
			header('Location:request_list.php');
		}
	}
	else{
		header('Location:login.php');
	}
	/*$qry1 = "SELECT * FROM user_info";
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
		$qry = "INSERT INTO user_info(first_name,last_name, username, password, contract_number, email, blood_group)
		VALUES('$first_name', '$last_name', '$username', '$password', '$contract_number', '$email', '$blood_group')";
		$res = $db_connect->query($qry) or die('bad query');
		$_SESSION['username'] = $username;
		header("location: index.php");

	}*/
?>