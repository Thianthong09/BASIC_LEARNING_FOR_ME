import java.util.Scanner;

public class Scanner1 {
    public static void main(String[] args) {
        // ຮັບຄ່າຂໍ້ມູນ

        // ປະກາດໃຊ້ງານ Class | new
        Scanner a = new Scanner(System.in);
        System.out.print("ປ້ອນຊື່ = ");
        String name = a.nextLine(); // ຮັບຄ່າ ຈາກແປ້ນພິມ

        System.out.print("input years = ");
        int year = a.nextInt(); // ຮັບຄ່າ integer

        int age = 2021 - year; // ຄຳນວນອາຍຸ

        System.out.println("Your name is = " + name);
        System.out.println("ປີ = " + year);
        System.out.println("ອາຍຸປະຈຸບັນ = " + age);

    }
}