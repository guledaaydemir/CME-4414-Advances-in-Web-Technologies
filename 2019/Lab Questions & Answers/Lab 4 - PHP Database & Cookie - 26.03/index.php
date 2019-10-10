<?php 
	$mesaj = "";
	if( isset($_POST["userName"]) && isset($_POST["userSurname"]) ) 
	{ 
		$name = $_POST["userName"];
		$surname = $_POST["userSurname"];
		
		setcookie("uName", $name, time() + (10), "/"); //86400 yazarsak 1 gün cookie oluyor 
		setcookie("uSurname", $surname, time() + (10), "/");
	
		header("location: admin.php");
	}
?> 
<!DOCTYPE html>
<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Cookie</title>
		<style type="text/css">
			form {
			width: 600px;
			height: 400px;
			margin-left: auto;
			margin-right: auto;
			padding: 15px;
			background: url("http://i.dailymail.co.uk/i/pix/2013/09/22/article-0-18297CEF00000578-775_634x426.jpg") no-repeat center top;
			background-size: cover;
			}
		</style>
	</head>
	<body> 
		<form action="<?php $_PHP_SELF ?>" method="POST"> 
			<div style="margin-left:100px;">
				<table>
					<tr>
						<td>
							Enter your name : 
						</td>
						<td>
							<input type="text" name="userName" required />
						</td>
					</tr>
					<tr>
						<td>
							Enter your surname : 
						</td>
						<td>
							<input type="text" name="userSurname" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" />
						</td>
					</tr>
				</table>
			</div>
		</form> 
	</body> 
</html>
