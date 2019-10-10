<!DOCTYPE html>
<html>
<head>
<title>First PHP Session</title>
</head>
<body>
<?php
//sample 2 variables
$month = 3;
$year = 2016;
echo "month/year <br>";
echo "$month/$year <br>";
echo $month/$year;
echo "<br><br>";
$num1 = 1087;
$num2 = 3010;
$total = $num1 + $num2;
echo $num1, "+", $num2 , " = ", $total ," <br>";
echo "<br><br>";
define ('gezegen' , 'dunya');
echo gezegen. "<br><br>";
$gezegen = "dssg";
echo gezegen. "<br><br>";
//define ('gezegen', 'aaaa');
$address = "http://www.google.com";
echo "<br><br>";
echo "$address"."<br>";
echo "<a href = '$address'>GOOGLE</a>";
unset ($address);
echo $address . "<br>";
?>
<?php
// Sample 3: array
$fruits = array("Apple", "Grapes", "Oranges",
"Berry");
for ($i = 0; $i<count($fruits); $i++)
{
	echo $fruits[$i] , "<br>";
}
echo "<br>";
$Student = array('first' => 'Aslı',
'second' => 'Barış',
'third' => 'Mehmet');
echo "First student= ".$Student["first"] .
"<br><br>";
foreach ($Student as $index => $value)
{
	echo "Key = " . $index . ", Value = " . $value;
	echo "<br>";
}
echo "<br><br>";
?>
</body>
</html>
Example