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