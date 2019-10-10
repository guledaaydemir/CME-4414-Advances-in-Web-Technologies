<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;
charset=utf-8">
<title>CME 4414 Web Tech PHP Tutorial</title>
</head>
<body>
<?php
// functions
function Add($num1, $num2) {
$result = $num1 + $num2;
return $result;
}
$result = Add(13, 25);
echo "sonuç: $result<br><br>";
// pass by reference
function arttir(&$num){
	$num += 10;
}
arttir($result);
echo "sonuç: $result<br><br>";
?>
</body>
</html>
Example