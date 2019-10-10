<?php 
	if( isset($_POST["uName"]) && isset($_POST["uPassword"]) ) 
	{ 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "testdb";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection Error: " . $conn->connect_error);
		}
		$conn->set_charset("utf8");
		$query = "select Name from user2 where Name = '".$_POST["uName"]."' and Password = '".$_POST["uPassword"]."'";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		if($row['Name'] == null)
		{
			$message = "Incorrect entry, try again";
		}
		else
		{
			session_start();
			$_SESSION['activeUser'] = $row['Name'];
			header("location: admin.php");
		}	
	}
	else
	{
		$message = "";
	} 
?> 
<!DOCTYPE html>
<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Session</title>
		<style type="text/css">
			form {
			width: 400px;
			margin-left: auto;
			margin-right: auto;
			padding: 15px;
			background-color: #FAFAFA;
			}
		</style>
	</head>
	<body> 
		<form action="<?php $_PHP_SELF ?>" method="POST"> 
			<table>
				<tr>
					<td>
						Enter user name : 
					</td>
					<td>
						<input type="text" name="uName" />
					</td>
				</tr>
				<tr>
					<td>
						Enter Password : 
					</td>
					<td>
						<input type="password" name="uPassword" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<?php echo $message; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" />
					</td>
				</tr>
			</table>
		</form> 
	</body> 
</html>
