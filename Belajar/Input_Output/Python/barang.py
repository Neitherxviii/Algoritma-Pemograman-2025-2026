nama = input("Masukkan nama barang: ")
harga = float(input("Masukkan harga barang: "))
jumlah = int(input("Masukkan jumlah barang: "))

total = harga * jumlah

if total > 100000:
    diskon = total * 0.10
else:
    diskon = 0
    
total_bayar = total - diskon

print("\n==== Struk Pembelian ====")
print(f"Nama Barang : {nama}")
print(f"Harga Satuan: Rp {harga}")
print(f"Jumlah      : {jumlah}")
print(f"Total       : Rp {total}")
print(f"Diskon      : Rp {diskon}")
print(f"Total Bayar : Rp {total_bayar}")
print("=========================")