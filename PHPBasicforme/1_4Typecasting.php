<!-- 
    Type casting ຄືການປ່ຽນຊະນິດຂອງຂໍ້ມູນທີ່ຕ້ອງການໂດຍໃສ່ຂໍ້ມູນຂອງຕົວແປໄວ້ໃນວົງເລັບໜ້າຕົວແປທີ່ຕ້ອງການຈະປ່ຽນ

$a = 10.5;                      $a=(integer)$a;

 -->

<?php
    $price = "100";
    $dalivery = 50;
    
    $total = $price + $dalivery;
    echo $total;
    echo gettype($total);

    $total=(double)$total;
    echo gettype($total);
?>