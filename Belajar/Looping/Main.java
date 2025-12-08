import java.util.*;

public class Main {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan NIM: ");
        String nim = input.nextLine();

        List<Integer> angka = new ArrayList<>();
        for (char c : nim.toCharArray()) {
            if (Character.isDigit(c)) {
                angka.add(c - '0');
            }
        }

        if (angka.isEmpty()) {
            System.out.println("NIM invalid.");
            return;
        }

        int total = 0;
        for (int d : angka) total += d;

        int maks = angka.get(0);
        for (int d : angka) if (d > maks) maks = d;

        int minim = angka.get(0);
        for (int d : angka) if (d < minim) minim = d;

        double rata = (double) total / angka.size();

        List<Integer> rev = new ArrayList<>(angka);
        Collections.reverse(rev);

        System.out.println("digit     " + angka);
        System.out.println("total     " + total);
        System.out.println("max       " + maks);
        System.out.println("min       " + minim);
        System.out.println("rata-rata " + rata);
        System.out.println("reverse   " + rev);
    }
}
