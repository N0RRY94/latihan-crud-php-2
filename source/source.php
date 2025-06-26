<?php

// ===================source untuk index.php ===============================//

// Membuka koneksi ke database MySQL dengan host "localhost", user "root", tanpa password, dan database "belajarphp"
$conn = mysqli_connect("localhost", "root", "", "belajarphp");

// Menjalankan query SQL untuk mengambil semua data dari tabel "test_pho"
$query = mysqli_query($conn, "SELECT * FROM test_pho");

// Membuat array kosong untuk menampung hasil query
$rows = [];

// Melakukan iterasi pada setiap baris hasil query dan memasukkannya ke dalam array $rows
while ($tables = mysqli_fetch_assoc($query)) {
    $rows[] = $tables;
}

// ===================source untuk tambah.php ===============================//

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $nama = $_POST["nama"];
//     $email = $_POST["email"];
//     $phone = $_POST["phone"];


//     $q_insert = mysqli_query($conn, "INSERT INTO test_pho(nama, email, phone) 
//                                  VALUES('$nama', '$email', '$phone')
//                                  ");
// };
// DI KASIH KOMENTAR TAKUTNYA BENTROK SAMA YANG LAIN, KARENA METHODE POST

// =====================untuk ubah=================
