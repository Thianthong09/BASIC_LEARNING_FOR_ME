<!-- Loop ແບບວົນຊ້ຳ
ກຸ່ມຄຳສັ່ງທີ່ໃຊ້ໃນການວົນຮອບ ໂປຮແກຣມຈະທຳງານໄປເລື່ອຍໆຈົນກວ່າເງື່ອນໄຂທີ່ກຳນົດໄວ້ຈະເປັນ False ຈຶ່ງຢຸດທຳງານ
- While
- For 
- Do..While 


Ep1. While loop 
ຈະທຳງານຕາມຄຳສັ່ງພາຍໃນ while ໄປເລື່ອຍໆເມື່ອເງື່ອນໄຂທີ່ກຳນົດເປັນຈິງ
ໂຄງສ້າງ
while(ເງື່ອນໄຊ){
    ຄຳສັ່ງທີ່ຈະວົນຊ້ຳເມື່ອເງື່ອນໄຂເປັນຈິງ;
} -->

<?php
$count = 1;
$limit = 10;
while($count <= $limit){
    echo " ຮອບທີ່ = ".$count."<br>";
    $count++;
}
?>