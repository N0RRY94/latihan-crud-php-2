<?php
require 'source/source.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];


    $q_insert = mysqli_query($conn, "INSERT INTO test_pho(nama, email, phone) 
                                 VALUES('$nama', '$email', '$phone')
                                 ");
};

?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="css/style-tambah.css">
</head>

<body>
    <h2>Form Tambah Data</h2>
    <form action="" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <button type="submit">Simpan</button>
    </form>
    <a href="index.php" style="display: inline-block; padding: 8px 16px; background: #3498db; color: #fff; text-decoration: none; border-radius: 4px; margin-top: 20px;">Home</a>
</body>

</html>