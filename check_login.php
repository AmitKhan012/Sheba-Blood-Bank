<?php
  // header("loacation: index.php");
	include 'connect_db.php';
  //include 'index.php';
 // header("location: index.php");
  $username= $_POST['username'];
	$password= $_POST['password'];

	$qry = "SELECT * FROM members";
  $res = $db_connect->query($qry) or die('bad query');
	$flage = 0;
	while($row = $res->fetch_assoc()) {
        if(($row["username"]==$username) && ($row["password"]==$password)){
       	//echo $username."<br>" ;
       		$flage = 1;
        //  $_SESSION['username'] = $username; 
          header("location: index.php");
          include 'index.php';
       		break;
       	 }
				
					
   	}	
    if($flage==1){
    	$_SESSION['username'] = $username;
    //  $_SESSION['admin'] = "admin"; 
   //   include 'index.php';
    //  header("location: index.php");
    }
    else{
   //   include 'login.php';
      echo "Incorrect username or password";
      header("location: login.php");
    }
?>