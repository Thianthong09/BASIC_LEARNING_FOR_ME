<?php
    $a = 500;
    $b = "500";
    var_dump($a == $b);//ເທົ່າກັນບໍ່
    var_dump($a === $b);//ຄືກັນບໍ່
    var_dump($a !== $b);//ບໍ່ຄືກັນບໍ່
    
    var_dump($a != $b);


    echo "<br> ຜົນການປຽບທຽບ : <br>".($a == $b);

    var_dump($a<=>$b);
?>