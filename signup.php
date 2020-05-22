<?php
	include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index_style.css">
</head>
<body>

	<div id="frm">
			<form action = "registration.php" method="post">
				<table>
					<tr>
						<th>First Name:</th>
						<th><input type="text" id = "first_name" name="first_name" placeholder="Enter first name" /></th>
					</tr>
					<tr>
						<th>Last Name:</th>
						<th><input type="text" name="last_name" placeholder="Enter last name" /></th>
					</tr>
					<tr>
						<th>Username:</th>
						<th><input type="text" name="username" placeholder="Enter username" /></th>
					</tr>
					<tr>
						<th>Password:</th>
						<th><input type="password" name="password" placeholder="Enter password" /></th>
					</tr>
					<!--<tr>
						<th>Confirm Password:</th>
						<th><input type="password" name="password2" placeholder="Confirm password"/></th>
					</tr>-->
					<tr>
						<th>Contract Number:</th>
						<th><input type="text" name="contract_number" placeholder="Enter contract number" /></th>
					</tr>
					<tr>
						<th>Email:</th>
						<th><input type="text" name="email" placeholder="Enter email id"/></th>
					</tr>
					<tr>
						<th>Gender:</th>
						<th><select type="text" name="gender">
							<option value="male" >Male</option>
							<option value="female"> Female </option>
							<option value="others"> Others </option>
						</select></th>
					</tr>
					<tr>
						<th>Blood Group:</th>
						<th>	
							<select type="text" name="blood_group">
								<option value="A_positive" >A(+) </option>
								<option value="A_negetive" >A(-) </option>
								<option value="B_positive" >B(+) </option>
								<option value="B_negetive" >B(-) </option>
								<option value="O_positive" >O(+) </option>
								<option value="O_negetive" >O(-) </option>
								<option value="AB_positive">AB(+)</option>
								<option value="AB_negetive">AB(-)</option>
							</select>
						</th>
					</tr>
					<tr>
						<th>Ready to donate:</th>
						<th><select type="text" name="donar">
							<option value="1" >YES</option>
							<option value="0"> NO </option>
						</select></th>
					</tr>
				</table>
				<input id="button" type="submit" name="submit"/>
			</form>
		</div>

</body>
</html>