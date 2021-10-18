<!-- Function 
- ຄືຊຸດຄຳສັ່ງທີ່ນຳມາຂຽນເປັນກຸ່ມເພື່ອໃຫ້ເອີ້ນໃຊ້ງານຕາມວັດຖຸປະສົງທີ່ຕ້ອງການ ແລະ ລົດຄວາມຊ້ຳຊ້ອນຂອງຄຳສັ່ງທີ່ໃຊ້ງານຕະຫຼອດ
Function ສາມາດນຳໄປໃຊ້ງານໄດ້ທຸກທີ່ ແລະ ແກ້ໄຂໄດ້ໃນພາຍຫຼັງ ເຮັດໃຫ້ໂຄ໋ດໃນໂປຣແກຣມເປັນລະບຽບ

- ເປັນໂປຣແກຣມຍ່ອຍທີ່ນຳເຂົ້າມາເປັນສ່ວນໝຶ່ງຂອງໂປຣແກຮມຫຼັກເພື່ອໃຫ້ສາມາດເອີ້ນໃຊ້ງານໄດ້ໂດຍບໍ່ຈຳເປັນຂຽນໂຄ໋ດຄຳສັ່ງໃໝ່ທັງໝົດ

ຊະນິດຂອງ Function
- Function ມາດຕະຖາດ (Built-In Function)  ຄື Functionທີ່ມີຢູ່ໃນພາສາ PHP  ຜູ້ໃຊ້ສາມາດເອີ້ນໃຊ້ງານໄດ້ເລີຍ
- Function ທີ່ຜູ້ໃຊ້ສ້າງຂື້ນມາເອງ (User-Define Funcition) ຄື FunctionFunction ທີ່ສ້າງຂື້ນມາເພື່ອວັດຖຸປະສົງຂອງຜູ້ໃຊ້ງານ
 -->

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