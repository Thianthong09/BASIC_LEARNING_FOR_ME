<!-- Function ເພິ່ມ ແລະ ລົບ ສະມາຊິກໃນArray
- array_push() ໃຊ້ເພິ່ມສະມາຊິກໃນຕຳແໜ່ງສຸດທ້າຍ
- array_pop() ໃຊ້ລົບສະມາຊິກໃນຕຳແໜ່ງສຸດທ້າຍ
- array_unshift() ໃຊ້ເພິ່ມສະມາຊິກໃນຕຳແໜ່ງທຳອິດ
- array_shift() ໃຊ້ລົບສະມາຊິກໃນຕຳແໜ່ງທຳອິດ
- array_splice() ໃຊ້ລົບ ແລະ ເພິ່ມ ສະມາຊິກໃນທຳແໜ່ງທີ່ຕ້ອງການ -->

<?php

$fruits = ["A","B","C","D"];
print_r($fruits);
print("<br>");

// array_push($fruits,"A+a");
// array_push($fruits,"B+b");
// print("<br>");
// print_r($fruits);
// print("<hr>");

// array_pop($fruits);
// print("<br>");
// print_r($fruits);

//array_splice("ຊື່ Array","ຕຳແໜ່ງ index","ຈຳນວນທີ່ຕ້ອງການລົບ")
array_splice($fruits,2,1);
print_r($fruits);
?>