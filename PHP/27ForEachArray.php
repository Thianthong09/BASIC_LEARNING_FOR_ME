
<?php
//ແບບດຽວ
$number = [10, 20, 30, 40, 50,];
$fruit = ["ໝາກກ້ຽງ", "ໝາກ,,", "ໝາກພ້າວ", "ໝາກໄຟ","ໝາກ.."];


//ແບບຈັບຄູ່
$colors = ["yellow"=>"ສີເຫືລອງ", "red"=>"ສີແດງ", "orange"=>"ສີສົ້ມ"];
$animals = ["dog"=>"ໝາ", "cat"=>"ແມວ", "pig"=>"ໝູ", "rabbit"=>"ກະຕ່າຍ"];

foreach($animals as $key=>$value){
    print($key."=>".$value."<br>");
}