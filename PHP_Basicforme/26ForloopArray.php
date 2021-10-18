<!-- ການເຂົ້າເຖິງສະມາຊິກດ້ວຍ For 
- count($pets); ນັບຈຳນວນສະມາຊິກໃນ array ໃຊ້ກັບ array ທີ່ມີ index ເປັນຕົວເລກທີ່ລຽງລຳດັບນ້ອຍຫາຫຼາຍ

-array_count_values($pets); ໃຊ້ນັບຄວາມຖີ່ຂອງຂໍ້ມູນໃນ array ທີ່ມີຄ່າຊ້ຳກັນ -->

<?php

//ແບບດຽວ
$number = [10, 20, 30, 40, 50,];
$fruit = ["ໝາກກ້ຽງ", "ໝາກ,,", "ໝາກພ້າວ", "ໝາກໄຟ","ໝາກ.."];


//ແບບຈັບຄູ່
$colors = ["yellow"=>"ສີເຫືລອງ", "red"=>"ສີແດງ", "orange"=>"ສີສົ້ມ"];
$animals = ["dog"=>"ໝາ", "cat"=>"ແມວ", "pig"=>"ໝູ", "rabbit"=>"ກະຕ່າຍ"];



for($index = 0; $index<$total; $index++){
    print("ຕຳແໜ່ງຂອງສະມາຊິກ =​ ".$index." => ".$number[$index]."<br>");
}
//ເອົາcount()ມານັບຈຳນວນຂອງ array
$total = count($number);
print(" ຈຳນວນສະມາຊິກ = ".$total);

//-----------
print_r(array_count_values($number));

?>