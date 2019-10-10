<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP DB3</title>
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
				$password = "";
				$dbname = "testdb";
				
				$conn = new mysqli($servername, $username, $password, $dbname);
				
				if ($conn->connect_error) {
					die("Connection failed : " . $conn->connect_error);
				}
				
				$conn->set_charset("utf8");
				
				$sql = "SELECT ID, Name, Phone FROM user";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
				?>
				<ul>
					<?php
						while($row = $result->fetch_assoc()) {
						?>
						<li>
						<?php echo "id: " . $row["ID"]. ", User Name: " . $row["Name"] . ",User Phone:" . $row["Phone"]; ?>
						</li>
						<?php
						}
					?>
				</ul>
				<?php 
				} 
				else {
					echo "User not found"; 
				}
				
				$conn->close();
				?>
			
		</div>
	</body>
</html>

