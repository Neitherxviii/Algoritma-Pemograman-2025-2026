import java.util.Scanner;

public class ATM {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        String nama;
        String konfirmasi;

        while (true) {
            System.out.print("Masukkan nama anda: ");
            nama = sc.nextLine();

            konfirmasi = "";
            while (!konfirmasi.equals("true") && !konfirmasi.equals("false")) {
                System.out.print("Apakah nama sudah benar? (true/false): ");
                konfirmasi = sc.nextLine().toLowerCase();
            }

            if (konfirmasi.equals("true")) break;
            System.out.println("Silakan masukkan nama kembali.\n");
        }

        String nim;
        while (true) {
            System.out.print("Masukkan NIM: ");
            nim = sc.nextLine();

            if (nim.matches("[0-9]+")) break;
            System.out.println("NIM harus angka!\n");
        }

        long saldo = Long.parseLong(nim);

        System.out.println("\nNama: " + nama);
        System.out.println("Saldo Awal: Rp " + saldo + "\n");

        while (true) {
            System.out.println("===== MENU ATM =====");
            System.out.println("1. Cek Saldo");
            System.out.println("2. Tarik Tunai");
            System.out.println("3. Setor Tunai");
            System.out.println("4. Transfer");
            System.out.println("5. Keluar");
            System.out.print("Pilih menu (1-5): ");

            String pilih = sc.nextLine();
            System.out.println();

            switch (pilih) {
                case "1":
                    System.out.println("Saldo: Rp " + saldo + "\n");
                    break;

                case "2":
                    System.out.print("Masukkan jumlah tarik tunai: ");
                    String tarik = sc.nextLine();
                    if (tarik.matches("[0-9]+")) {
                        long t = Long.parseLong(tarik);
                        if (t <= saldo) {
                            saldo -= t;
                            System.out.println("Saldo baru: Rp " + saldo + "\n");
                        } else {
                            System.out.println("Saldo tidak cukup!\n");
                        }
                    } else {
                        System.out.println("Input tidak valid!\n");
                    }
                    break;

                case "3":
                    System.out.print("Masukkan jumlah setor: ");
                    String setor = sc.nextLine();
                    if (setor.matches("[0-9]+")) {
                        saldo += Long.parseLong(setor);
                        System.out.println("Saldo baru: Rp " + saldo + "\n");
                    } else {
                        System.out.println("Input tidak valid!\n");
                    }
                    break;

                case "4":
                    System.out.print("Masukkan nominal transfer: ");
                    String transfer = sc.nextLine();
                    if (transfer.matches("[0-9]+")) {
                        long tr = Long.parseLong(transfer);
                        if (tr <= saldo) {
                            System.out.print("Masukkan nomor rekening tujuan: ");
                            String rek = sc.nextLine();
                            saldo -= tr;
                            System.out.println("Transfer berhasil ke " + rek);
                            System.out.println("Saldo baru: Rp " + saldo + "\n");
                        } else {
                            System.out.println("Saldo tidak cukup!\n");
                        }
                    } else {
                        System.out.println("Input tidak valid!\n");
                    }
                    break;

                case "5":
                    System.out.println("Terima kasih!");
                    return;

                default:
                    System.out.println("Pilihan tidak valid!\n");
            }
        }
    }
}
