<?php
	session_start();
	$activeUser = null;
	
	if(isset($_SESSION['activeUser'])) {
		$activeUser =  $_SESSION['activeUser'];
	}
?> 
<!DOCTYPE html>
<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Session</title>
	</head>
	<body> 
		<div>
			<?php 
				if($activeUser) {
					echo "Welcome " . $activeUser;
				}
				else {
					echo "<a href='index.php'>Giriş yapınız!</a>";
				}
			?>
		</div>
	</body>
</html>