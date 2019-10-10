<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Forms</title>
		<style type="text/css">
			.wrapper {
			margin-bottom: 15px;
			padding: 6px;
			border: 2px solid #eee;
			}
		</style>
	</head>
	<body>
		<div style="width: 500px; margin-left: auto; margin-right: auto; padding: 15px; background-color: #FCFCFC;">
			<div class="wrapper">
				<h2>POST Variables</h2>
				<?php
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						print_r($_POST);
						echo "<br><br>";
						$nameSname = $_POST["namesurname"];	
						$phoneNo = $_POST["phone"];
						echo "Name Surname: '" . $nameSname . "'<br><br>";
						echo "Phone Number: '" . $phoneNo . "'<br>";
					}
					else {
						echo "There is no variable with POST<br><br>";
					}
				?>
			</div>
			<div class="wrapper">
				<h2>GET Variables</h2>
				<?php
					if($_SERVER["REQUEST_METHOD"] == "GET") {
						print_r($_GET);
						echo "<br><br>";
						$nameSname = $_POST["namesurname"];	
						$phoneNo = $_POST["phone"];
						echo "Name Surname: '" . $nameSname . "'<br><br>";
						echo "Phone Number: '" . $phoneNo . "'<br>";
					}
					else {
						echo "here is no variable with GET<br><br>";
					}
				?>
			</div>
			<a href="reader.php">BACK</a>
		</div>
	</body>
</html>

