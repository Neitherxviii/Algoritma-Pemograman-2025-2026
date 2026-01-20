class Buku:
    def __init__(self, judul, penulis):
        self.judul = judul
        self.penulis = penulis

    def info_buku(self):
        return f"Judul: {self.judul}, Penulis: {self.penulis}"

buku1 = Buku("Pemrograman Python", "Guido van Rossum")
print(buku1.info_buku())
