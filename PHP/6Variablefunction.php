<!-- Function ທີ່ເຮັດວຽກກ່ຽວກັບຕົວແປ
- isset ຄື Function ທີ່ກວດສອບວ່າມີການກຳນົດຄ່າ​ຫຼື ບໍ່? ຖ້າມີຈະເປັນ ຖືກ! ຖ້າບໍ່ຈະເປັນ ຜິດ
- unset ຍົກເລີກຕົວແປ ແລະ ຄືນຄ່າໃຫ້ໝ່ວຍຄວາມຈຳ
- empty ຄື Function ກວດສອບວ່າມີຄ່າວ່າງຫຼືບໍ່ (ເລກສູນ) ຖ້າມີຈະເປັນ ຖືກ! ຖ້າບໍ່ຈະເປັນ ຜິດ
- is_null ຄື Function ກວດສອບວ່າມີຄ່າວ່າງຫຼືບໍ່ 
- print_r() Function ສະແດງຄ່າຕົວແປ Array
- var_dump() Function ສະແດງລາຍລະອຽດຂອງຕົວແປ
 -->


<?php
    $total1 = null;
    $total2 = "";
    $total3 = 0;
    $total4 = "Thian";

    // unset($total4); //ເປັນການລົບຕົວແປ ຄືນຄ່າໃຫ້ໝ່ວຍຄວາມຈຳ

    // echo " ຕົວແປ total1 : ".isset($total1)."<br>"; //isset ກວດສອບວ່າມີຄ່າຫຼືບໍ່?
    // echo " ຕົວແປ total2 : ".isset($total2)."<br>";
    // echo " ຕົວແປ total3 : ".isset($total3)."<br>";
    // echo " ຕົວແປ total4 : ".isset($total4)."<br>";
    
    // echo " ຕົວແປ total1 : ".empty($total1)."<br>"; //empty ກວດສອບວ່າມີຄ່າຫຼືບໍ່ (ເລກ 0)?
    // echo " ຕົວແປ total2 : ".empty($total2)."<br>";
    // echo " ຕົວແປ total3 : ".empty($total3)."<br>";
    // echo " ຕົວແປ total4 : ".empty($total4)."<br>";


    // echo " ຕົວແປ total1 : ".is_null($total1)."<br>"; //is_null ກວດສອບວ່າມີຄ່າວ່າງຫຼືບໍ່?
    // echo " ຕົວແປ total2 : ".is_null($total2)."<br>";
    // echo " ຕົວແປ total3 : ".is_null($total3)."<br>";
    // echo " ຕົວແປ total4 : ".is_null($total4)."<br>";

    echo var_dump($total1)."<br>";
    echo var_dump($total2)."<br>";
    echo var_dump($total3)."<br>";
    echo var_dump($total4)."<br>";

?>