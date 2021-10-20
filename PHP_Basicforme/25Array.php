<!-- ຂໍ້ຈຳກັດຂອງຊະນິດຂໍ້ມູນພື້ນຖານ
ການປະກາດຕົວແປແຕ່ລະຄັ້ງ ຕົວແປ 1 ສາມາດເກັບຄ່າໄດ້ພຽງ 1 ຄ່າເທົ່ານັ້ນເຊັ່ນ: $number = 1;

-----------------------------------------
Array 
- ຄືຊຸດຂອງຕົວແປທີ່ຢູ່ໃນຮູບລຳດັບໃຊ້ເກັບຄ່າຂອງຂໍ້ມູນໃຫ້ຢູ່ໃນກຸ່ມດຽວກັນ ຂໍ້ມູນພາຍໃນ Array ຈະເກັບໄວ້ໃນໜ່ວຄວາມຈຳ
ໃນຕຳແໜ່ງທີ່ຕໍ່ເນື່ອງກັນ ໂດຍຂະໜາດຂອງ Array ຈະນ້ອຍ ຫຼື ໃຫຍ່ ຂື້ນກັບຈຳນວນມິຕິທີ່ກຳນົດຂື້ນ.

- ເປັນຕົວແປທີ່ໃຊ້ໃນການເກັບຂໍ້ມູນທີ່ມີລະດັບຕໍ່ເນື່ອງ ຊິ່ງຂໍ້ມູນມີຄ່າຫຼາຍຄ່າໂດຍໃຊ້ຊື່ອ້າງອີງໄດ້ພຽງຊື່ດຽວ ແລະ ໃຊ້ໝາຍເລກ
ກຳກັບ  (index) ໃຫ້ກັບຕົວແປເພື່ອຈຳແນກຄວາມແຕກຕ່າງຂອງຄ່າຕົວແປແຕ່ລະຕົວແປ

---------------------------------------------
Strueture Array
1. ຂໍ້ມູນທີ່ຢູ່ໃນ Array ຈະເອີ້ນວ່າ ສະມາຊິກ ຫຼື (Element)
2. ແຕ່ (Element) ຈະເກັບຄ່າ (Value) ແລະ (index) ເອົາໄວ້
3. (index) ໝາຍເຖິງ Key ຂອງ (Array) ໃຊ້ອ້າງອີງຕຳແໜ່ງ (Element)
4. (index) ເປັນໄດ້ທັງຕົວເລກ ແລະ ຕົວໜັງສື (Keys)
5. ສະມາຊິກໃນ Array ຕ້ອງມີຊະນິດຂໍ້ມູນຄືກັນ 
6. ສະມາຊິກໃນ Array ຈະຖືກຂັ້ນໄວ້ດ້ວຍເຄື່ອງໝາຍ Comma,
----------------------------------------------
ປະເພດຂອງ Array
1. Array ແບບດຽວ
2. Array ແບບຈັບຄູ່ (Associate)

ຮູບແບບການສ້ງ Array
1. ໃຊ້ Function Array 
2. ໃຊ້ Function range // range (start, stop, step)
3. ໃຊ້ສັນຍາລັກ [] -->

<?php
$number = array(10,20,30,40);
print_r($number);

print("<br>");

echo $number[0];

echo "__________________";

$n=range(1,100,5);
print($n);

?>
