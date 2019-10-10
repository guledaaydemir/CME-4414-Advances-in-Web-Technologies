<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testdb";
	
	..........
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$conn->set_charset("utf8");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP DB-2</title>
		<style type="text/css">
			#dvMain {
			width: 700px;
			margin-left: auto;
			margin-right: auto;
			padding: 15px;
			background-color: #FAFAFA;
			}
		</style>
		<script>
			function checkInputs() {
				var ad = 
				if(ad == "") {
					alert("You should enter name");
					document.getElementById("adsoyad").focus();
					return false;
				}
				
				return true;
			}
		</script>
	</head>
	<body>
		<div id="dvMain">
			<div style="border: 2px solid #eee; padding: 6px;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return checkInputs();">
					<table>
						<tbody>
							<tr>
								<td>Name Surname</td>
								<td>:</td>
								<td><input type="text" id="adsoyad" name="nsname" /></td>
							</tr>
							<tr>
								<td>Phone number</td>
								<td>:</td>
								<td><input type="text" name="phone" required /></td>
							</tr>
							<tr>
								<td colspan="3"><input type="submit" name="sub1" value="SAVE" /></td>
							</tr>
						</tbody>
					</table>
				</form>
				<br>
				<?php
					function safely($data) {
						$data = trim ($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}
					
					$adsoyad = $telefon = "";
					if(isset($_POST["nsname"]) && isset($_POST["phone"])) {
						$adsyoad = safely($_POST["nsname"]);
						$telefon = safely($_POST["phone"]);
						
						$sql = "INSERT INTO user (Name,Phone)
						VALUES ('$adsoyad', '$telefon')";
						
						if($conn->query($sql) === TRUE) {
							$last_id = conn->insert_id;
							echo "New user: " . $last_id . " recorded.";
						}
						else {
							echo "Error: " .$sql . "<br>" . $conn->error;
						}
					}
				?>
			</div>
			
			<br><br>
			
			<div style="border: 2px solid #eee; padding: 6px;">
				<h2>Kayıtlı kişiler</h2>
				<ul>
					<?php
						$sql = "SELECT ID, Name, Phone FROM user";
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
							<li>
								<?php echo "id: " . $row["ID"]. ", User Name: " . $row["Name"] . ",User Phone:" . $row["Phone"]; ?>
							</li>
							
							<?php
							}
							} 
							else {
								echo "<li>User not found!</li>";
							}
					?>
				</ul>
			</div>
		</div>
	</body>
</html>
<?php
	$conn->close()
?>

