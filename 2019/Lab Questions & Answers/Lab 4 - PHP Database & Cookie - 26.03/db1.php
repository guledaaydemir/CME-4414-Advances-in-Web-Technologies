<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Database Connection</title>
		<style type="text/css">
			#dvMain {
			width: 700px;
			margin-left: auto;
			margin-right: auto;
			padding: 15px;
			background-color: #FAFAFA;
			}
		</style>
	</head>
	<body>
		<div id="dvMain">
			
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "Nehir2005";
				$dbname = "testdb";
				
				//Create connection 
				$conn = new mysqli($servername, $username, $password, $dbname);
				
				//Check connection 
				if ($conn->connect_error) {
					die("Connection failed:" . $conn->connect_error);
				}
				
				//Türkçe karakter desteği
				$conn->set_charset("utf8");
				
				$sql = "INSERT INTO user (Name, Phone)
				VALUES ('Gül Eda Aydemir', '5325624155')";
				
				if($conn->query($sql) === TRUE){
					$last_id = $conn->insert_id;
					echo "New User : " . $last_id . "recorded. ";
				}else{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				/*
				echo "Connected successfully";	
				echo "<b>Connection object:</b><br><br>";
				var_dump($conn);
				echo "<br><br><br>";
				*/
				
				$conn->close();
				
			?>
			
		</div>
	</body>
</html>

