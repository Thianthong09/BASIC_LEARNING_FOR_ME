<!-- Array 2 ມິຕິ
- Array ທີ່ມີຂໍ້ມູນສະມາຊິກພາຍໃນເປັນ Array (Array ຊ້ອນ Array) ປຽບສະເໝືອນກັນ matrix
- ມີໂຄງສ້າງເປັນຮູບແບບ ແຖວ (ແນວນອນ) ແລະ (ແນວຕັ້ງ)

English      |   Lao       |   Price
Keyboard     |   ຄີບອດ     |   1500
Mouse        |  ເມາສ໌       |   900
Speaker      |  ລຳໂພງ      |   2500

$products = array(
    array("keyboard","ຄີບອດ",1500)
    array("mouse","ເມາສ໌",900)
    array("speaker","ລຳໂພງ",2500)
) -->

<?php

$products = array(
    array("keyboard","ຄີບອດ",1500),
    array("mouse","ເມາສ໌",900),
    array("speaker","ລຳໂພງ",2500)
);
//ການເຂົ້າເຖິງສະມາຊິກ -- ແຖວ, ຖັນ
print($products[0][1]); //'ຄີບອດ'
echo "<br>";

//ການເຂົ້າເຖິງສະມາຊິກ -- For loop

for($row=0; $row<count($products);$row++){
    print(" ສິນຄ້າທີ່ = ".$row."<br>");
    for($column=0; $column<count($products[$row]);$column++){
        print(" ຊື່ສິນຄ້າ = ".$products[$row][$column]."<br>");

    }
    print("<hr>");
}

////ການເຂົ້າເຖິງສະມາຊິກ -- For Each

foreach($products as $product){
    print("END = ".$product[0]."<br>");
    print("LAO = ".$product[1]."<br>");
    print("Price = ".$product[2]."<br>");
    print("hr");
}

?>