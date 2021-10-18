<?php
$a = 10;
$b = 5;

if($a > $b){
    echo $a." ຫຼາຍກວ່າ > ".$b."<hr>";

}else {
    echo $a." <ໜ້ອຍກວ່າ ".$b."<hr>";
}

// Ternary Operator
// ? ຄຳສັ່ງ ຖືກ
// : ຄຳສັ່ງ ຜິດ

$a>$b ? (print $a." ຫຼາຍກວ່າ > ".$b."<br>") : (print $a."< ໜ້ອຍກວ່າ".$b."<br>");

?>