<?php
// Memeriksa apakah form dikirimkan menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Mengambil data dari form dan menyimpannya ke variabel
    $nama          = $_POST['nama'];
    $kode_pesawat  = $_POST['kode_pesawat'];
    $kelas         = $_POST['kelas'];
    $jumlah_tiket  = $_POST['jumlah_tiket'];

    // Menampilkan hasil inputan
    echo "<h3>Detail Pemesanan Tiket</h3>";
    echo "Nama: " . $nama . "<br>";
    echo "Kode Pesawat: " . $kode_pesawat . "<br>";
    echo "Kelas: " . $kelas . "<br>";
    echo "Jumlah Tiket: " . $jumlah_tiket . "<br>";
}
?>