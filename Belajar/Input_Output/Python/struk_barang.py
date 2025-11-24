nama = input("Masukkan nama barang: ")
harga = float(input("Masukkan harga barang: "))
jumlah = int(input("Masukkan jumlah barang: "))

total = harga * jumlah

minimal_diskon = 40800
diskon_persen = 8

if total > minimal_diskon:
    diskon = total * (diskon_persen / 100)
else:
    diskon = 0

total_bayar = total - diskon

print("\n==== Struk Pembelian ====")
print("Nama Barang   :", nama)
print("Harga Satuan  : Rp", int(harga))
print("Jumlah        :", jumlah)
print("Total         : Rp", int(total))
print("Minimal Diskon: Rp", minimal_diskon)
print("Diskon (%)    :", str(diskon_persen) + "%")
print("Diskon        : Rp", int(diskon))
print("Total Bayar   : Rp", int(total_bayar))
print("=========================")
