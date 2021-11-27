package Java_Basicforme;

import java.util.Scanner;
import java.util.jar.Attributes.Name;

class InputNextline {
    public static void main(String[] args) {
        Scanner no = new Scanner(System.in);
        System.out.print("Enter your name = ");
        String name = no.nextLine(); // input String
        System.out.println("name your is " + name);
    }
}