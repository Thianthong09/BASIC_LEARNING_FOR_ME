<!-- ໂຄງສ້າງຄວບຄຸມ (Control Structure) ຄື ກຸ່ມຄຳສັ່ງທີ່ໃຊ້ຄວບຄຸມການທຳງານຂອງໂປຣແກຣມ
Sequence        ແບບລຳດັບ
Condition       ແບບເງື່ອນໄຂ
Loop            ແບບວົນຊ້ຳ

if statement
ເປັນຄຳສັ່ງທີ່ໃຊ້ກຳນົດເງື່ອນໄຂໃນການຕັດສິນໃຈທຳງານຂອງໂປຣແກຣມ
ຖ້າເງື່ອນໄຂເປັນຈິງຈະທຳງານຕາມຄຳສັ່ງຕ່າງໆ ທີ່ກຳນົດພາຍໃຕ້ເງື່ອນໄຂນັ້ນໆ

if(ເງື່ອນໄຂ){ 
    ຄຳສັ່ງເມື່ອເງື່ອນໄຂເປັນຈິງ;
} -->


<?php
$balance = 1000;
$withdraw = -40;

echo "ເງິນໃນບັນຊີ :".$balance."<br>";
echo "ຈຳນວນເງິນທີ່ຖອນ : ".$withdraw."<br> <hr>";

if($withdraw<=$balance && $withdraw >=1 ){

    echo "ສາມາດກົດເງິນໄດ້ <br>";
    $balance -= $withdraw;
    echo "ຍອດເງິນຄົງເຫຼືອ : ".$balance."<br>";

}else {
    echo "ຍອດເງິນຄົງເຫຼືອບໍ່ພໍ <br>";
}
echo "ຄືນບັດກົດເງີນ";