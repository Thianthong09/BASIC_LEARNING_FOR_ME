<!-- /*Data Type : ຊະນິດຂໍ້ມູນ

ມີຄື:​ 
- Integer ຈຳນວນເຕັມ
- Float / Double ຈຳນວນທົດສະນີຍົມ
- Boolean ຖືກ -​ ຜິດ
- String ຕົວໜັງສື
- Object ຄືການກຳນົດໃຫ້ຕົວແປນັ້ນເກັບຄຸນລົມບັດໄວ້ ຂອງ Object (Attribute & Method) ໂດຍປະກາດຜ່ານ Class (OOP)
- Array ຄືຊຸດ ຫຼື ກຸ່ມຂອງຂໍ້ມູນທີ່ມີຊະນິດດຽວກັນ
*/ -->

<?php
$price=50;//integer
$score=90.58;

$name="NOY";
$isvalid=false;
echo $name."<br>";
echo $isvalid."<br>";
echo $price."<br>";
echo $score."<br>";

echo "<hr>";

echo gettype($name)."<br>";
echo gettype($isvalid)."<br>";
echo gettype($score)."<br>";
echo gettype($price)."<br>";
echo "<hr>";

//___________________________________________________

/* ສະແດງຊະນິດຂໍ້ມູນຂອງຕົວແປ
gettype(), settye()
ດຶງ      ,  ກຳນົດ
example :
$score = 90.58;
echo $score."<br>";
echo "Befor".gettype($score)."<br>";
settype($score,"integer");
echo "After".gettype($score)."<br>";

Output :
Befor Double
After integer

*/

echo "(Befor) ກ່ອນປ່ຽນ : ".gettype($score)."<br>";
settype($score,"integer");
echo "(After) ຫຼັງປ່ຽນ : ".gettype($score)."<br>";
?>