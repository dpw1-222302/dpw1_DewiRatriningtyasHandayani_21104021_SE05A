function hitungTotalBarang() {
    // Mendapatkan nilai inputan jumlah barang
    let jumlahA = parseInt(document.getElementById("jumlahA").value);
    let jumlahB = parseInt(document.getElementById("jumlahB").value);
    let jumlahC = parseInt(document.getElementById("jumlahC").value);

    // Mendefinisikan harga barang
    let hargaA = 10000;
    let hargaB = 15000;
    let hargaC = 20000;

    // Menghitung total harga pembelian
    let totalHarga = hargaA * jumlahA + hargaB * jumlahB + hargaC * jumlahC;

    // Menampilkan hasil pada elemen dengan id "hasil"
    document.getElementById("hasil").innerHTML = "Total harga pembelian adalah: Rp " + totalHarga;
}