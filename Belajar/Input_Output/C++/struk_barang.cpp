#include <iostream>
#include <string>
using namespace std;

int main() {
    string nama;
    double harga;
    int jumlah;

    cout << "Masukkan nama barang: ";
    getline(cin, nama);

    cout << "Masukkan harga barang: ";
    cin >> harga;

    cout << "Masukkan jumlah barang: ";
    cin >> jumlah;

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

    cout << "\n==== Struk Pembelian ====\n";
    cout << "Nama Barang   : " << nama << endl;
    cout << "Harga Satuan  : Rp " << (int)harga << endl;
    cout << "Jumlah        : " << jumlah << endl;
    cout << "Total         : Rp " << (int)total << endl;
    cout << "Minimal Diskon: Rp " << minimalDiskon << endl;
    cout << "Diskon (%)    : " << diskonPersen << "%" << endl;
    cout << "Diskon        : Rp " << (int)diskon << endl;
    cout << "Total Bayar   : Rp " << (int)totalBayar << endl;
    cout << "=========================\n";

    return 0;
}
