<?php
$price=50;//integer
$score=90.58;

$name="NOY";
$isvalid=false;
echo $name."<br>";
echo $isvalid."<br>";
echo $price."<br>";
echo $score."<br>";

echo "<hr>";

echo gettype($name)."<br>";
echo gettype($isvalid)."<br>";
echo gettype($score)."<br>";
echo gettype($price)."<br>";

echo "<hr>";

echo "(Befor) ກ່ອນປ່ຽນ : ".gettype($score)."<br>";
settype($score,"integer");
echo "(After) ຫຼັງປ່ຽນ : ".gettype($score)."<br>";
?>