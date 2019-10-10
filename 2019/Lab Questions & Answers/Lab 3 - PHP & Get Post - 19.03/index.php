<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Forms</title>
		<style type="text/css">
			table {
			border: 2px solid #eee;
			}
			
			td {
			padding: 6px;
			}
			
			input[type="submit"] {
			cursor: pointer;
			}
			#dvMain {
			width: 500px;
			margin-left: auto;
			margin-right: auto;
			padding: 15px;
			background-color: #FAFAFA;
			}
		</style>
	</head>
	<body>
		<div id="dvMain">
			
			<form action="reader.php" method="POST">
				<table>
					<tbody>
						<tr>
							<td colspan="3">FORM 1 (POST)</td>
						</tr>
						<tr>
							<td>Name Surname</td>
							<td>:</td>
							<td><input type="text" name="namesurname" /></td>
						</tr>
						<tr>
							<td>Telephone</td>
							<td>:</td>
							<td><input type="text" name="phone" /></td>
						</tr>
						<tr>
							<td colspan="3"><input type="submit" name="sub1" value="SEND-POST" /></td>
						</tr>
					</tbody>
				</table>
			</form>
			
			<br><br><br>
			
			<form action="index.php" method="GET">
				<table>
					<tbody>
						<tr>
							<td colspan="3">FORM 2 (GET)</td>
						</tr>
						<tr>
							<td>Name Surname</td>
							<td>:</td>
							<td><input type="text" name="namesurname" /></td>
						</tr>
						<tr>
							<td>Phone number</td>
							<td>:</td>
							<td><input type="text" name="phone" /></td>
						</tr>
						<tr>
							<td colspan="3"><input type="submit" name="sub2" value="SEND-GET" /></td>
						</tr>
					</tbody>
				</table>
			</form>
			
		</div>
	</body>
</html>

