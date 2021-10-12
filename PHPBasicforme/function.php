<?php
// function show($message){
//     echo "Hello ".$message."<br>";
//     echo "<hr>";
// }

// function add($a , $b){
//     $c=$a+$b;
//     print($a." + ".$b." = ".$c."<br>");
// }

// add(10,20);
// add(50,1000);

function getaddress(){
    return "Laos<br>";

}

function getbonus(){
    return 100000;

}
$mycity=getaddress();

print("MY = ".$mycity);

print(getbonus());

$bonus=getbonus();
$salary = 10000+$bonus;

print("<br>All =  ".$salary);
?>