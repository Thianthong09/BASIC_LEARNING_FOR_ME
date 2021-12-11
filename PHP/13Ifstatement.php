<?php
$score = 20;
$grade = "";

if ($score >= 80){
    $grade = "A";
}else if ($score >= 70){
    $grade = "B";
}else if ($score >= 60){
    $grade = "C";
}else if($score >= 50 ){
    $grade = "D";
}else {
    $grade = "F";
}
echo "ຄະແນນຂອງເຈົ້າຄື : ".$score." ເກດທີ່ໄດ້​ :".$grade;