<?php
	$ad = $soyad = null;
	if(isset($_POST["delCookie"])){
		setcookie("uName", false, time() - (60), "/");
		setcookie("uSurname", false, time() - (60*60), "/");
	}
	else{
		if(isset($_COOKIE["uName"]) && $_COOKIE["uSurname"])){
		$ad = $_COOKIE["uName"];
		$soyad = $_COOKIE["uSurname"];
		}
	}
?> 
<!DOCTYPE html>
<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Cookie</title>
		<style type="text/css">
			#mainDiv {
			width: 300px;
			margin-left: auto;
			margin-right: auto;
			padding: 15px;
			background-color: #eee;
			}
		</style>
	</head>
	<body> 
		<div id="mainDiv">
			<?php 
				//print_r($_POST);
				if(isset($ad)) {
					echo "Welcome " . $ad . " " . $soyad;
				?>
				<br>
				<br>
				<form method="POST"> 
					<input type="submit" name="delCookie" value="Delete cookies!" />
				</form>
				<?php
					}
					else {
					echo "<a href='index.php'>Try again!</a>";
				}
			?>
		</div>
	</body>
</html>