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
			<form action = "db_request_form.php" method="post">
				<table>
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
						<td><textarea name="comment" cols="50" rows="5">Enter here</textarea></td>
					</tr>
				</table>
				<input id="button" type="submit" name="submit"/>
			</form>
		</div>

</body>
</html>