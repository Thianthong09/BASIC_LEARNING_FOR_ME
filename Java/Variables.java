package Java_Basicforme;
// /*

// * ຮູບແບບການຕັ້ງຊື່ 1. Class
// * ກຳນົດໃຫ້ຕົວອັກສອນຕົວທຳອິດເປັນຕົວພິມໃຫຍ່ທີ່ເຫຼື່ອເປັນຕົວພິມນ້ອຍ ເຊັ່ນ:
// MyClass, HelloWorld
// * 2. Data / ຕົວແປ ທຸກຕົວເປັນຕົວພິມນ້ອຍ ເຊັ່ນ: color, name, age
// * 3. ຄ່າຄົງທີ່ ຕ້ອງເປັນຕົວພິມໃຫຍ່ທັງໝົດ ເຊັ່ນ: SIZE, WIDTH, HEIGHT
// */

// /*
// * Data Types in java | ປະເພດຂໍ້ມູນໃນ ຈາວາ
// *
// * 1. Primitive Data Types | ປະເພດຂໍ້ມູນເບື້ອງຕົ້ນ
// * - Integers : byte, short, int, long
// * - Floating-Point : float, double
// * - Character : char
// * - boolean : boolean
// *
// * 2. Non-primitive Data Types | ປະເພດຂໍ້ມູນທີ່ບໍ່ແມ່ນເບື້ອງຕົ້ນ
// * - String
// * - Array
// * - List
// * - Set
// * - Stack
// * - Vector
// * - Dictionary
// * - All user-defined classes
// * - etc.
// */
// ການນິຍາມ ຕົວແປ;
// ຊະນິດຂໍ້ມູນ ຊື່ຕົວແປ;
// ຊະນິດຂໍ້ມູນ ຊື່ຕົວແປ =​ ຄ່າເລີ່ມຕົ້ນ;

// ແບບຫຼາຍຕົວ
// ຊະນິດຂໍ້ມູນ ຊື່ຕົວແປ =​ ຄ່າເລີ່ມຕົ້ນ, ຊື່ຕົວແປ =​ ຄ່າເລີ່ມຕົ້ນ

class Variables {
    public static void main(String[] args) {
        // ນິຍາມຕົວແປແບບບໍ່ລະບຸຄ່າເລີ່ມຕົວ
        int number1;
        boolean status; // Case Sensitive ຫ້າມຕັ້ງຊື່ຕົວແປ ຄືກັນ
        char alphabet;
        float number2;
        double number3;
        String C = "Hello world";
        System.out.println(C);

        // ນິຍາມຕົວແປແບບຄ່າເລີ່ມຕົ້ນ
        int number5 = 10;
        float count = 20.5f; // ຕື່ມ f ເພື່ອລະບຸວ່າເປັນ float
        char alphabet1 = 'A';
        boolean status1 = true;
        System.out.println("ສະແດງ =​ " + count);

        // ການສ້າງຕົວແປຫຼາຍໆຕົວ
        int number11 = 100, number12 = 123;

        // ການນິການຄ່າຄົງທີ່
        // final Datatype value;
        final int number1234 = 50;
        System.out.println("ສະແດງ 50 x 5 = " + number1234 * 5);

        // Global Variable
        int a = 100;
        int b = 200;
        System.out.println("ສະແດງGlobal Variable = " + a);

        {
            // Local Variable
            int z = 300;
            System.out.println("ສະແດງLocal Variable = " + z);
        }

        // ຄ່າ Max _ Min
        System.out.println(Double.MAX_VALUE);
    }
}