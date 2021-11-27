package Java_Basicforme;

import java.time.Instant;

// Type Casting ການແປງ ຊະນິດຂອງຂໍ້ມູນ

// 1. Widening Casting 
// ຄືການແປງຂໍ້ມູນທີ່ມີຂະໜາດນ້ອຍໄປສູ່ຂະໜາດໃຫຍ່ (ແບບອັດຕະໂນມັດ)
// byte > short > char > int > long > float > double

// 2. Narrowing Casting
// ຄືການແປງຂໍ້ມູນທີ່ມີຂະໜາດໃຫຍ່ໄປສູ່ຂະໜາດນ້ອຍ (ເຮັດເອງ)

// double > float > long > int > char > short > byte

public class TypeCasting {
    public static void main(String[] args) {
        // Widening Casting
        int numint = 10;
        double numdouble = numint;
        System.out.println(numint);
        System.out.println(numdouble);

        System.out.println("____________________");

        // Narrowing Casting
        double number1 = 10;
        int number2 = (int) number1;
        System.out.println(number1);
        System.out.println(number2);

        // ແປງຄ່າ String

        String a = "50", b = "200";
        int c;
        c = Integer.parseInt(a);
        c = c + 50;
        System.out.println("String = " + c);

        // Integer > String
        int num22 = 100;
        String age = String.valueOf(num22);
        System.out.println("ສະແດງ ຈຳນວນເຕັມ -> ຕົວໜັງສື =" + age);

        System.out.println("____________________");
        // ກວດສອບຊະນິດຂໍ້ມູນ
        int a2;
        double b2;
        String c2 = "Hello world";
        boolean d2;
        char e2;
        float f2;

        boolean result = a.toString() instanceof String;
        System.out.print(result);
    }
}
