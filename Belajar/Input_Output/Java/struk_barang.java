package Input_Output.Java;

import java.util.Scanner;

public class struk_barang {
    public static void main(String[] args) {
        
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan nama barang: ");
        String nama = input.nextLine();
        System.out.print("Masukkan harga barang: ");
        double harga = input.nextDouble();
        System.out.print("Masukkan jumlah barang: ");
        
        int jumlah = input.nextInt();
        double total = harga * jumlah;
        int minimalDiskon = 40800;
        int diskonPersen = 8;
        double diskon;
        if (total > minimalDiskon) {
            diskon = total * (diskonPersen / 100.0);
        } else {
            diskon = 0;
        }

        double totalBayar = total - diskon;

        System.out.println("\n==== Struk Pembelian ====");
        System.out.println("Nama Barang   : " + nama);
        System.out.println("Harga Satuan  : Rp " + (int)harga);
        System.out.println("Jumlah        : " + jumlah);
        System.out.println("Total         : Rp " + (int)total);
        System.out.println("Minimal Diskon: Rp " + minimalDiskon);
        System.out.println("Diskon (%)    : " + diskonPersen + "%");
        System.out.println("Diskon        : Rp " + (int)diskon);
        System.out.println("Total Bayar   : Rp " + (int)totalBayar);
        System.out.println("=========================");
    }
}
