#include <iostream>
#include <string>
using namespace std;

bool angkaValid(string s) {
    if (s == "") return false;
    for (char c : s) {
        if (c < '0' || c > '9') return false;
    }
    return true;
}

int main() {
    string nama;
    string konfirmasi;

    while (true) {
        cout << "Masukkan nama anda: ";
        getline(cin, nama);

        konfirmasi = "";
        while (konfirmasi != "true" && konfirmasi != "false") {
            cout << "Apakah nama sudah benar? (true/false): ";
            getline(cin, konfirmasi);
        }

        if (konfirmasi == "true") break;
        cout << "Silakan masukkan nama kembali.\n";
    }

    string nim;
    while (true) {
        cout << "Masukkan NIM: ";
        getline(cin, nim);

        if (angkaValid(nim)) break;
        cout << "NIM harus angka!\n";
    }

    long long saldo = stoll(nim);

    cout << "\nNama: " << nama << endl;
    cout << "Saldo Awal: Rp " << saldo << "\n\n";

    while (true) {
        cout << "===== MENU ATM =====\n";
        cout << "1. Cek Saldo\n";
        cout << "2. Tarik Tunai\n";
        cout << "3. Setor Tunai\n";
        cout << "4. Transfer\n";
        cout << "5. Keluar\n";
        cout << "Pilih menu (1-5): ";

        string pilih;
        getline(cin, pilih);
        cout << "\n";

        if (pilih == "1") {
            cout << "Saldo: Rp " << saldo << "\n\n";
        }

        else if (pilih == "2") {
            string tarik;
            cout << "Masukkan jumlah tarik tunai: ";
            getline(cin, tarik);

            if (angkaValid(tarik)) {
                long long t = stoll(tarik);
                if (t <= saldo) {
                    saldo -= t;
                    cout << "Saldo baru: Rp " << saldo << "\n\n";
                } else {
                    cout << "Saldo tidak cukup!\n\n";
                }
            } else {
                cout << "Input tidak valid!\n\n";
            }
        }

        else if (pilih == "3") {
            string setor;
            cout << "Masukkan jumlah setor: ";
            getline(cin, setor);

            if (angkaValid(setor)) {
                saldo += stoll(setor);
                cout << "Saldo baru: Rp " << saldo << "\n\n";
            } else {
                cout << "Input tidak valid!\n\n";
            }
        }

        else if (pilih == "4") {
            string transfer;
            cout << "Masukkan nominal transfer: ";
            getline(cin, transfer);

            if (angkaValid(transfer)) {
                long long tr = stoll(transfer);
                if (tr <= saldo) {
                    string rek;
                    cout << "Masukkan nomor rekening tujuan: ";
                    getline(cin, rek);

                    saldo -= tr;
                    cout << "Transfer berhasil ke " << rek << endl;
                    cout << "Saldo baru: Rp " << saldo << "\n\n";
                } else {
                    cout << "Saldo tidak cukup!\n\n";
                }
            } else {
                cout << "Input tidak valid!\n\n";
            }
        }

        else if (pilih == "5") {
            cout << "Terima kasih!\n";
            return 0;
        }

        else {
            cout << "Pilihan tidak valid!\n\n";
        }
    }
}
