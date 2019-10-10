<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>CME 4414 Web Tech PHP Tutorial</title>
</head>
<body>
<?php
// classes
class Person
{
public $ad;
public $soyad;
public function __construct($ad = 'Alan', $soyad = 'Turing') {
$this->ad = $ad;
$this->soyad = $soyad;
}
public function func1() {
return "Merhaba, " . $this->ad . " " . $this->soyad;
}
public function __destruct() {
echo "***" . __CLASS__ . " siliniyor... -- $this->ad, $this->soyad -- <br>";
}
}
$turing = new Person('Alan');
$ada = new Person("Lady Ada", 'Lovelace');
echo $turing-> func1();
echo "<br><br>";
var_dump($turing);
echo "<br><br>";
echo $turing-> __destruct();
unset($turing);
echo "<br><br>";
echo $ada-> func1();
echo "<br><br>";
?>
</body>
</html>